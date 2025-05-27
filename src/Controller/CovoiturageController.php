<?php

namespace App\Controller;

use App\Entity\Covoiturage;
use App\Entity\Utilisateur;
use App\Entity\Vehicule;
use App\Entity\Preference;
use App\Entity\Avis;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Doctrine\ORM\EntityManagerInterface;


class CovoiturageController extends AbstractController
{
    #[Route('/covoiturages', name: 'app_covoiturages')]
    public function index(Request $request, ManagerRegistry $doctrine): Response
    {
        $covoiturages = [];
        $prochaineDate = null;

        $adresseDepart = $request->query->get('adresseDepart');
        $adresseArrivee = $request->query->get('adresseArrivee');
        $dateDepart = $request->query->get('dateDepart');
        $ecologique = $request->query->get('ecologique');
        $prixMax = $request->query->get('prixMax');
        $dureeMax = $request->query->get('dureeMax');
        $noteMin = $request->query->get('noteMin');

        $hasFilter = $adresseDepart && $adresseArrivee && $dateDepart;

        if ($hasFilter) {
            /** @var \App\Repository\CovoiturageRepository $repository */
            $repository = $doctrine->getRepository(Covoiturage::class);

            $dateStart = (new \DateTime($dateDepart))->setTime(0, 0, 0);
            $dateEnd = (new \DateTime($dateDepart))->setTime(23, 59, 59);

            $qb = $repository->createQueryBuilder('c')
                ->join('c.vehicule', 'v')
                ->join('c.chauffeur', 'u')
                ->where('c.adresseDepart LIKE :adresseDepart')
                ->andWhere('c.adresseArrivee LIKE :adresseArrivee')
                ->andWhere('c.dateDepart BETWEEN :dateStart AND :dateEnd')
                ->andWhere('c.placesRestantes > 0')
                ->andWhere('c.dateDepart >= :now') // Exclure les covoiturages passés
                ->andWhere('c.status != :statusEnCours') // Exclure les covoiturages en cours
                ->andWhere('c.status != :statusTermine') // Exclure les covoiturages terminés
                ->setParameter('adresseDepart', '%' . $adresseDepart . '%')
                ->setParameter('adresseArrivee', '%' . $adresseArrivee . '%')
                ->setParameter('dateStart', $dateStart)
                ->setParameter('dateEnd', $dateEnd)
                ->setParameter('now', new \DateTime()) // Date et heure actuelles
                ->setParameter('statusEnCours', 'en_cours') // Ajout du paramètre manquant
                ->setParameter('statusTermine', 'termine'); // Ajout du paramètre manquant

            // Filtre écologique
            if ($ecologique !== null && $ecologique !== '') {
                if ($ecologique == '1') {
                    $qb->andWhere('LOWER(v.energie) = :energie')->setParameter('energie', 'électrique');
                } elseif ($ecologique == '0') {
                    $qb->andWhere('LOWER(v.energie) != :energie')->setParameter('energie', 'électrique');
                }
            }

            // Filtre prix max
            if ($prixMax !== null && $prixMax !== '') {
                $qb->andWhere('c.prix <= :prixMax')->setParameter('prixMax', $prixMax);
            }

            // Filtre note minimale
            if ($noteMin !== null && $noteMin !== '') {
                $qb->andWhere('u.noteMoyenne >= :noteMin')->setParameter('noteMin', $noteMin);
            }

            $covoiturages = $qb->getQuery()->getResult();

            // Filtre durée max (en PHP car dépend de la logique métier)
            if ($dureeMax !== null && $dureeMax !== '') {
                $covoiturages = array_filter($covoiturages, function($covoit) use ($dureeMax) {
                    $heureDepart = $covoit->getHeureDepart(); // Exemple : "10h00"
                    $heureArrivee = $covoit->getHeureArrivee(); // Exemple : "15h00"

                    // Convertir les heures en minutes pour effectuer la comparaison
                    [$heureDep, $minuteDep] = sscanf($heureDepart, '%dh%d');
                    [$heureArr, $minuteArr] = sscanf($heureArrivee, '%dh%d');

                    // Calculer la durée totale en minutes
                    $dureeTotaleMinutes = ($heureArr * 60 + $minuteArr) - ($heureDep * 60 + $minuteDep);

                    // Convertir la durée maximale en minutes
                    $dureeMaxMinutes = $dureeMax * 60;

                    // Vérifier si la durée totale est inférieure ou égale à la durée maximale
                    return $dureeTotaleMinutes <= $dureeMaxMinutes;
                });
            }

            // Si aucun covoiturage, chercher la prochaine date disponible
            if (empty($covoiturages)) {
                $qb2 = $repository->createQueryBuilder('c')
                    ->select('MIN(c.dateDepart) as prochaineDate')
                    ->where('c.adresseDepart LIKE :adresseDepart')
                    ->andWhere('c.adresseArrivee LIKE :adresseArrivee')
                    ->andWhere('c.placesRestantes > 0')
                    ->andWhere('c.dateDepart > :dateEnd')
                    ->setParameter('adresseDepart', '%' . $adresseDepart . '%')
                    ->setParameter('adresseArrivee', '%' . $adresseArrivee . '%')
                    ->setParameter('dateEnd', $dateEnd);
                $result = $qb2->getQuery()->getSingleScalarResult();
                if ($result) {
                    $prochaineDate = new \DateTime($result);
                }
            }
        }

        // Calculer les avis et notes pour chaque covoiturage
        $covoituragesData = [];
        foreach ($covoiturages as $covoiturage) {
            $chauffeur = $covoiturage->getChauffeur();
            $avisValides = $doctrine->getRepository(Avis::class)->findBy([
                'destinataire' => $chauffeur,
                'isValide' => true,
            ]);
            $noteMoyenne = $chauffeur->calculerNoteMoyenne();
            $nombreAvis = count($avisValides);

            $covoituragesData[] = [
                'covoiturage' => $covoiturage,
                'noteMoyenne' => $noteMoyenne,
                'nombreAvis' => $nombreAvis,
            ];
        }

        return $this->render('covoiturages.html.twig', [
            'covoituragesData' => $covoituragesData,
            'prochaineDate' => $prochaineDate,
            'hasFilter' => $hasFilter, // Indique si des filtres ont été appliqués
        ]);
    }

    #[Route('/covoiturages/{id<\d+>}', name: 'app_covoiturage_details')]
    public function details(int $id, EntityManagerInterface $entityManager): Response
    {
        $covoiturage = $entityManager->getRepository(Covoiturage::class)->find($id);

        if (!$covoiturage) {
            throw $this->createNotFoundException('Covoiturage introuvable.');
        }

        // Récupère les avis validés pour le chauffeur
        $avisValides = $entityManager->getRepository(Avis::class)->findBy([
            'destinataire' => $covoiturage->getChauffeur(),
            'isValide' => true,
        ]);

        // Calcul de la note moyenne
        $noteMoyenne = $covoiturage->getChauffeur()->calculerNoteMoyenne();

        // Compte le nombre d'avis validés
        $nombreAvis = count($avisValides);

        return $this->render('detailsCovoiturage.html.twig', [
            'covoiturage' => $covoiturage,
            'avisValides' => $avisValides,
            'noteMoyenne' => $noteMoyenne,
            'nombreAvis' => $nombreAvis, // Passe le nombre d'avis au template
        ]);
    }

    #[Route('/covoiturages/{id<\d+>}/participer', name: 'app_covoiturage_participer', methods: ['POST'])]
    public function participer(int $id, ManagerRegistry $doctrine, Request $request): Response
    {
        $entityManager = $doctrine->getManager();
        $covoiturage = $entityManager->getRepository(Covoiturage::class)->find($id);

        if (!$covoiturage) {
            throw $this->createNotFoundException('Covoiturage non trouvé.');
        }

        $user = $this->getUser();
        if (!$user instanceof Utilisateur) {
            throw $this->createNotFoundException('Utilisateur non trouvé.');
        }
        if (!$user) {
            $this->addFlash('error', 'Vous devez être connecté pour participer à un covoiturage.');
            return $this->redirectToRoute('app_login');
        }

        // Vérifier les conditions
        if ($covoiturage->getPlacesRestantes() <= 0) {
            $this->addFlash('error', 'Il n\'y a plus de places disponibles pour ce covoiturage.');
            return $this->redirectToRoute('app_covoiturage_details', ['id' => $id]);
        }

        try {
            $user->decrementCredits($covoiturage->getPrix());
        } catch (\LogicException $e) {
            $this->addFlash('error', 'Vous n\'avez pas assez de crédits pour participer à ce covoiturage.');
            return $this->redirectToRoute('app_covoiturage_details', ['id' => $id]);
        }

        // Vérification du CSRF token
        if (!$this->isCsrfTokenValid('participer'.$id, $request->request->get('_token'))) {
            $this->addFlash('error', 'Action non autorisée.');
            return $this->redirectToRoute('app_covoiturage_details', ['id' => $id]);
        }

        // Mettre à jour les places restantes
        $covoiturage->setPlacesRestantes($covoiturage->getPlacesRestantes() - 1);

        // Ajouter l'utilisateur comme passager
        $covoiturage->addPassager($user);

        // Sauvegarder les changements
        $entityManager->persist($user);
        $entityManager->persist($covoiturage);
        $entityManager->flush();

        $this->addFlash('success', 'Vous avez rejoint le covoiturage avec succès !');

        return $this->redirectToRoute('app_covoiturage_details', ['id' => $id]);
    }

    #[Route('/covoiturage/{id<\d+>}/annuler', name: 'app_covoiturage_annuler', methods: ['POST'])]
    public function annulerCovoiturage(
        int $id,
        Request $request,
        ManagerRegistry $doctrine,
        MailerInterface $mailer
    ): Response {
        $entityManager = $doctrine->getManager();
        $covoiturage = $entityManager->getRepository(Covoiturage::class)->find($id);

        if (!$covoiturage) {
            $this->addFlash('error', 'Covoiturage introuvable.');
            return $this->redirectToRoute('app_user_space');
        }

        $user = $this->getUser();

        // Rembourser les crédits à l'utilisateur
        $user->incrementCredits($covoiturage->getPrix());

        // Vérifiez si l'utilisateur est le chauffeur ou un passager
        if ($covoiturage->getChauffeur() === $user) {
            // Si le chauffeur annule
            foreach ($covoiturage->getPassagers() as $passager) {
                // Rembourse les crédits aux passagers
                $passager->incrementCredits($covoiturage->getPrix());
            }

            // Envoi d'un email aux passagers
            foreach ($covoiturage->getPassagers() as $passager) {
                $email = (new Email())
                    ->from('ecoride@exemple.com')
                    ->to($passager->getEmail())
                    ->subject('Annulation du covoiturage')
                    ->text("Bonjour {$passager->getPseudo()},\n\nLe covoiturage prévu de {$covoiturage->getAdresseDepart()} à {$covoiturage->getAdresseArrivee()} a été annulé par le chauffeur.\n\nMerci de votre compréhension.");
                $mailer->send($email);
            }

            // Supprime le covoiturage
            $entityManager->remove($covoiturage);
        } elseif ($covoiturage->getPassagers()->contains($user)) {
            // Si un passager annule
            $covoiturage->removePassager($user);
            $covoiturage->setPlacesRestantes($covoiturage->getPlacesRestantes() + 1);

        }

        $entityManager->flush();

        $this->addFlash('success', 'Le covoiturage a été annulé avec succès.');
        return $this->redirectToRoute('app_user_space');
    }

    #[Route('/covoiturage/{id<\d+>}/supprimer', name: 'app_covoiturage_delete', methods: ['POST'])]
    public function deleteCovoiturage(int $id, Request $request, EntityManagerInterface $entityManager): Response
    {
        $covoiturage = $entityManager->getRepository(Covoiturage::class)->find($id);

        if (!$covoiturage) {
            $this->addFlash('error', 'Covoiturage introuvable.');
            return $this->redirectToRoute('app_user_space');
        }

        if ($this->isCsrfTokenValid('delete_covoiturage_' . $covoiturage->getId(), $request->request->get('_token'))) {
            $entityManager->remove($covoiturage);
            $entityManager->flush();

            $this->addFlash('success', 'Covoiturage supprimé avec succès.');
        }

        return $this->redirectToRoute('app_user_space');
    }

    #[Route('/covoiturages/historique', name: 'app_covoiturage_historique')]
    public function historiqueCovoiturages(EntityManagerInterface $entityManager): Response
    {
        $user = $this->getUser();
        $covoiturages = $entityManager->getRepository(Covoiturage::class)->findBy([
            'chauffeur' => $user,
            'isArchived' => true,
        ]);

        return $this->render('historique_covoiturages.html.twig', [
            'covoiturages' => $covoiturages,
        ]);
    }

    #[Route('/covoiturage/nouveau', name: 'app_covoiturage_add')]
    public function addCovoiturage(Request $request, EntityManagerInterface $entityManager): Response
    {
        $user = $this->getUser();

        if (!$user || !$user->isChauffeur()) {
            $this->addFlash('error', 'Vous devez être chauffeur pour ajouter un covoiturage.');
            return $this->redirectToRoute('app_user_space');
        }

        if ($request->isMethod('POST')) {
            $departure = $request->request->get('departure');
            $arrival = $request->request->get('arrival');
            $departureTime = $request->request->get('departure_time');
            $arrivalTime = $request->request->get('arrival_time');
            $price = $request->request->get('price');
            $vehicleId = $request->request->get('vehicle');
            $placesDispo = $request->request->get('places_dispo');
            $preferences = $request->request->all('preferences');

            if (!is_array($preferences)) {
                $preferences = [];
            }

            if (empty($departure) || empty($arrival) || empty($departureTime) || empty($arrivalTime) || empty($price) || empty($vehicleId) || empty($placesDispo)) {
                $this->addFlash('error', 'Tous les champs obligatoires doivent être remplis.');
                return $this->redirectToRoute('app_covoiturage_add');
            }

            try {
                $departureDateTime = new \DateTime($departureTime);
                $arrivalDateTime = new \DateTime($arrivalTime);
                $heureDepart = $departureDateTime->format('H:i');
                $heureArrivee = $arrivalDateTime->format('H:i');
            } catch (\Exception $e) {
                $this->addFlash('error', 'Les dates et heures doivent être valides.');
                return $this->redirectToRoute('app_covoiturage_add');
            }

            $vehicle = $entityManager->getRepository(Vehicule::class)->find($vehicleId);
            if (!$vehicle || $vehicle->getUtilisateur() !== $user) {
                $this->addFlash('error', 'Le véhicule sélectionné est invalide.');
                return $this->redirectToRoute('app_covoiturage_add');
            }

            $ecologicalEnergies = ['électrique', 'hybride'];
            $energieVehicule = strtolower(trim($vehicle->getEnergie())); // Normalise la valeur

            $isEcologique = in_array($energieVehicule, $ecologicalEnergies, true);

            $covoiturage = new Covoiturage();
            $covoiturage->setAdresseDepart($departure);
            $covoiturage->setAdresseArrivee($arrival);
            $covoiturage->setDateDepart($departureDateTime);
            $covoiturage->setDateArrivee($arrivalDateTime);
            $covoiturage->setHeureDepart($heureDepart);
            $covoiturage->setHeureArrivee($heureArrivee);
            $covoiturage->setPrix($price - 2);
            $covoiturage->setVehicule($vehicle);
            $covoiturage->setIsEcologique($isEcologique);
            $covoiturage->setPlacesRestantes((int) $placesDispo);
            $covoiturage->setChauffeur($user);

            foreach ($preferences as $preferenceId) {
                $preference = $entityManager->getRepository(Preference::class)->find($preferenceId);
                if ($preference && $preference->getUtilisateur() === $user) {
                    $covoiturage->addPreference($preference);
                }
            }
            $covoiturage->setChauffeur($user);

            $entityManager->persist($covoiturage);
            $entityManager->flush();

            $this->addFlash('success', 'Votre covoiturage a été ajouté avec succès.');
            return $this->redirectToRoute('app_user_space');
        }

        return $this->render('add_covoiturage.html.twig', [
            'vehicules' => $user->getVehicules(),
            'preferences' => $user->getPreferences(),
        ]);
    }

    #[Route('/covoiturage/{id<\d+>}/modifier', name: 'app_covoiturage_edit')]
    public function editCovoiturage(int $id, Request $request, EntityManagerInterface $entityManager): Response
    {
        $covoiturage = $entityManager->getRepository(Covoiturage::class)->find($id);

        if (!$covoiturage) {
            $this->addFlash('error', 'Covoiturage introuvable.');
            return $this->redirectToRoute('app_user_space');
        }

        if ($covoiturage->getChauffeur() !== $this->getUser()) {
            $this->addFlash('error', 'Vous n\'êtes pas autorisé à modifier ce covoiturage.');
            return $this->redirectToRoute('app_user_space');
        }

        $preferences = $entityManager->getRepository(Preference::class)->findAll();

        if ($request->isMethod('POST')) {
            $covoiturage->setAdresseDepart($request->request->get('adresseDepart'));
            $covoiturage->setAdresseArrivee($request->request->get('adresseArrivee'));
            $covoiturage->setDateDepart(new \DateTime($request->request->get('dateDepart')));
            $covoiturage->setDateArrivee(new \DateTime($request->request->get('dateArrivee')));
            $covoiturage->setPrix($request->request->get('prix'));
            $covoiturage->setPlacesRestantes($request->request->get('placesRestantes'));

            $selectedPreferences = $request->request->all('preferences');
            if (!is_array($selectedPreferences)) {
                $selectedPreferences = [];
            }

            $covoiturage->getPreferences()->clear();
            foreach ($selectedPreferences as $preferenceId) {
                $preference = $entityManager->getRepository(Preference::class)->find($preferenceId);
                if ($preference) {
                    $covoiturage->addPreference($preference);
                }
            }

            $entityManager->flush();

            $this->addFlash('success', 'Covoiturage modifié avec succès.');
            return $this->redirectToRoute('app_user_space');
        }

        return $this->render('edit_covoiturage.html.twig', [
            'covoiturage' => $covoiturage,
            'preferences' => $preferences,
        ]);
    }

    #[Route('/covoiturage/{id<\d+>}/demarrer', name: 'app_covoiturage_start', methods: ['POST'])]
    public function startCovoiturage(int $id, Request $request, EntityManagerInterface $entityManager): Response
    {
        $covoiturage = $entityManager->getRepository(Covoiturage::class)->find($id);

        if (!$covoiturage || $covoiturage->getChauffeur() !== $this->getUser()) {
            $this->addFlash('error', 'Vous n\'êtes pas autorisé à démarrer ce covoiturage.');
            return $this->redirectToRoute('app_user_space');
        }

        if (!$this->isCsrfTokenValid('start_covoiturage_' . $id, $request->request->get('_token'))) {
            $this->addFlash('error', 'Action non autorisée.');
            return $this->redirectToRoute('app_user_space');
        }

        $covoiturage->setStatus('en_cours');
        $entityManager->flush();

        $this->addFlash('success', 'Le covoiturage a démarré.');
        return $this->redirectToRoute('app_user_space');
    }

    #[Route('/covoiturage/{id<\d+>}/terminer', name: 'app_covoiturage_end', methods: ['POST'])]
    public function endCovoiturage(int $id, Request $request, EntityManagerInterface $entityManager, MailerInterface $mailer): Response
    {
        $covoiturage = $entityManager->getRepository(Covoiturage::class)->find($id);

        if (!$covoiturage || $covoiturage->getChauffeur() !== $this->getUser()) {
            $this->addFlash('error', 'Vous n\'êtes pas autorisé à terminer ce covoiturage.');
            return $this->redirectToRoute('app_user_space');
        }

        if (!$this->isCsrfTokenValid('end_covoiturage_' . $id, $request->request->get('_token'))) {
            $this->addFlash('error', 'Action non autorisée.');
            return $this->redirectToRoute('app_user_space');
        }

        $covoiturage->setStatus('termine');
        $entityManager->flush();

        // Envoi d'un email aux participants
        foreach ($covoiturage->getPassagers() as $passager) {
            $email = (new Email())
                ->from('ecoride@exemple.com')
                ->to($passager->getEmail())
                ->subject('Validation du covoiturage')
                ->text("Bonjour {$passager->getPseudo()},\n\nLe covoiturage de {$covoiturage->getAdresseDepart()} à {$covoiturage->getAdresseArrivee()} est terminé. Veuillez vous rendre sur votre espace pour valider que tout s'est bien passé.");
            $mailer->send($email);
        }

        $this->addFlash('success', 'Le covoiturage est terminé. Les participants ont été notifiés.');
        return $this->redirectToRoute('app_user_space');
    }

    #[Route('/covoiturage/{id<\d+>}/validation', name: 'app_covoiturage_validate', methods: ['POST'])]
    public function validateCovoiturage(int $id, Request $request, EntityManagerInterface $entityManager): Response
    {
        $covoiturage = $entityManager->getRepository(Covoiturage::class)->find($id);
        $user = $this->getUser();

        if (!$covoiturage || !$covoiturage->getPassagers()->contains($user)) {
            $this->addFlash('error', 'Vous n\'êtes pas autorisé à valider ce covoiturage.');
            return $this->redirectToRoute('app_user_space');
        }

        $validation = $request->request->get('validation');
        $commentaire = $request->request->get('commentaire');

        $avis = new Avis();
        $avis->setAuteur($user);
        $avis->setCovoiturage($covoiturage);
        $avis->setDate(new \DateTime());
        $avis->setDestinataire($covoiturage->getChauffeur());
        $avis->setCommentaires($commentaire);
        $avis->setNote($request->request->get('note'));
        $avis->setIsValide($validation === 'ok');

        $entityManager->persist($avis);
        $entityManager->flush();

        // Vérifie si le covoiturage peut être archivé
        $this->archiveCovoiturageIfValidated($covoiturage, $entityManager);

        $this->addFlash('success', 'Votre retour a été enregistré.');
        return $this->redirectToRoute('app_user_space');
    }

    #[Route('/covoiturage/{id<\d+>}/feedback', name: 'app_covoiturage_feedback', methods: ['GET', 'POST'])]
    public function feedback(int $id, Request $request, EntityManagerInterface $entityManager): Response
    {
        $covoiturage = $entityManager->getRepository(Covoiturage::class)->find($id);

        if (!$covoiturage || !$covoiturage->getPassagers()->contains($this->getUser())) {
            $this->addFlash('error', 'Vous n\'êtes pas autorisé à évaluer ce covoiturage.');
            return $this->redirectToRoute('app_user_space');
        }

        if ($request->isMethod('POST')) {
            $note = $request->request->get('note');
            $commentaires = $request->request->get('commentaires');

            // Validation des données
            if ($note < 1 || $note > 5) {
                $this->addFlash('error', 'La note doit être comprise entre 1 et 5.');
                return $this->redirectToRoute('app_covoiturage_feedback', ['id' => $id]);
            }

            // Enregistrement de l'avis
            $avis = new Avis();
            $avis->setNote((int) $note);
            $avis->setCommentaires($commentaires);
            $avis->setDate(new \DateTime());
            $avis->setAuteur($this->getUser());
            $avis->setCovoiturage($covoiturage);
            $avis->setDestinataire($covoiturage->getChauffeur());
            $avis->setIsValide(false); // Avis en attente de validation par un employé

            $entityManager->persist($avis);
            $entityManager->flush();

            $this->addFlash('success', 'Votre avis a été soumis avec succès. Il sera validé par un employé.');
            return $this->redirectToRoute('app_user_space');
        }

        return $this->render('feedback.html.twig', [
            'covoiturage' => $covoiturage,
        ]);
    }

    private function archiveCovoiturageIfValidated(Covoiturage $covoiturage, EntityManagerInterface $entityManager): void
    {
        // Vérifie si le covoiturage a le statut "termine"
        if ($covoiturage->getStatus() !== 'termine') {
            return; // Ne pas archiver si le covoiturage n'est pas terminé
        }

        // Vérifie si tous les passagers ont soumis un avis validé
        foreach ($covoiturage->getPassagers() as $passager) {
            $avis = $entityManager->getRepository(Avis::class)->findOneBy([
                'covoiturage' => $covoiturage,
                'auteur' => $passager,
                'isValide' => true, // Vérifie que l'avis est validé
            ]);

            if (!$avis) {
                return; // Si un passager n'a pas soumis d'avis validé, ne pas archiver
            }
        }

        // Si tous les passagers ont validé, archive le covoiturage
        $covoiturage->setIsArchived(true);
        $entityManager->persist($covoiturage);
        $entityManager->flush();
    }

    #[Route('/chauffeur/avis', name: 'app_chauffeur_avis')]
    public function avisRecus(EntityManagerInterface $entityManager): Response
    {
        $user = $this->getUser();

        if (!$user || !$user->isChauffeur()) {
            $this->addFlash('error', 'Vous devez être chauffeur pour accéder à cette page.');
            return $this->redirectToRoute('app_user_space');
        }

        $avisRecus = $entityManager->getRepository(Avis::class)->findBy([
            'destinataire' => $user,
            'isValide' => true,
        ]);

        return $this->render('user/avis_recus.html.twig', [
            'avisRecus' => $avisRecus,
        ]);
    }
}