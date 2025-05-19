<?php

namespace App\Controller;

use App\Entity\Covoiturage;
use App\Entity\Utilisateur;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

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
                ->setParameter('adresseDepart', '%' . $adresseDepart . '%')
                ->setParameter('adresseArrivee', '%' . $adresseArrivee . '%')
                ->setParameter('dateStart', $dateStart)
                ->setParameter('dateEnd', $dateEnd);

            // Filtre écologique
            if ($ecologique !== null && $ecologique !== '') {
                if ($ecologique == '1') {
                    $qb->andWhere('v.energie = :energie')->setParameter('energie', 'électrique');
                } elseif ($ecologique == '0') {
                    $qb->andWhere('v.energie != :energie')->setParameter('energie', 'électrique');
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

        return $this->render('covoiturages.html.twig', [
            'covoiturages' => $covoiturages,
            'prochaineDate' => $prochaineDate,
            'hasFilter' => $hasFilter, // Indique si des filtres ont été appliqués
        ]);
    }

    #[Route('/covoiturages/{id}', name: 'app_covoiturage_details')]
    public function details(int $id, ManagerRegistry $doctrine): Response
    {
        $repository = $doctrine->getRepository(Covoiturage::class);
        $covoiturage = $repository->find($id);

        if (!$covoiturage) {
            throw $this->createNotFoundException('Covoiturage non trouvé.');
        }

        return $this->render('detailsCovoiturage.html.twig', [
            'covoiturage' => $covoiturage, // L'objet covoiturage avec ses relations
        ]);
    }

    #[Route('/covoiturages/{id}/participer', name: 'app_covoiturage_participer', methods: ['POST'])]
    public function participer(int $id, ManagerRegistry $doctrine, Request $request): Response
    {
        $entityManager = $doctrine->getManager();
        $covoiturage = $doctrine->getRepository(Covoiturage::class)->find($id);

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
}