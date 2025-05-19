<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Vehicule;
use App\Entity\Preference;
use App\Entity\Covoiturage;


class UserController extends AbstractController
{
    #[Route('/mon-espace', name: 'app_user_space')]
    public function userSpace(Request $request, EntityManagerInterface $entityManager): Response
    {
        /** @var \App\Entity\Utilisateur $user */
        $user = $this->getUser();

        if (!$user) {
            $this->addFlash('error', 'Vous devez être connecté pour accéder à votre espace.');
            return $this->redirectToRoute('app_login');
        }

        // Mise à jour du rôle
        if ($request->isMethod('POST') && $request->request->get('role')) {
            $role = $request->request->get('role');
            $user->setIsPassager($role === 'passager' || $role === 'passager_chauffeur');
            $user->setIsChauffeur($role === 'chauffeur' || $role === 'passager_chauffeur');
            $entityManager->persist($user);
            $entityManager->flush();

            $this->addFlash('success', 'Votre rôle a été mis à jour.');
            return $this->redirectToRoute('app_user_space');
        }

        return $this->render('user/space.html.twig', [
            'user' => $user,
        ]);
    }

    #[Route('/mon-espace/ajouter-vehicule', name: 'app_user_add_vehicle')]
    public function addVehicle(Request $request, EntityManagerInterface $entityManager): Response
    {
        /** @var \App\Entity\Utilisateur $user */
        $user = $this->getUser();

        if (!$user) {
            $this->addFlash('error', 'Vous devez être connecté pour ajouter un véhicule.');
            return $this->redirectToRoute('app_login');
        }

        if ($request->isMethod('POST')) {
            $plate = $request->request->get('plate');
            $registrationDate = $request->request->get('registration_date');
            $brand = $request->request->get('brand');
            $model = $request->request->get('model');
            $color = $request->request->get('color');
            $seats = $request->request->get('seats');
            $energy = $request->request->get('energy');

            // Validation basique
            if (empty($plate) || empty($registrationDate) || empty($brand) || empty($model) || empty($color) || empty($seats)) {
                $this->addFlash('error', 'Tous les champs obligatoires doivent être remplis.');
                return $this->redirectToRoute('app_user_add_vehicle');
            }

            /** @var \App\Entity\Vehicule $vehicle */

            // Création du véhicule
            $vehicle = new Vehicule();
            $vehicle->setImmatriculation($plate);
            $vehicle->setDatePremiereImmatriculation(new \DateTime($registrationDate));
            $vehicle->setMarque($brand);
            $vehicle->setModele($model);
            $vehicle->setCouleur($color);
            $vehicle->setPlacesDispo((int) $seats);
            $vehicle->setEnergie($energy);


            // Associer le véhicule à l'utilisateur
            $user->addVehicule($vehicle);

            // Sauvegarder dans la base de données
            $entityManager->persist($vehicle);
            $entityManager->persist($user);
            $entityManager->flush();

            $this->addFlash('success', 'Votre véhicule a été ajouté avec succès.');
            return $this->redirectToRoute('app_user_space');
        }

        return $this->render('user/add_vehicle.html.twig');
    }

    #[Route('/mon-espace/preferences', name: 'app_user_preferences')]
    public function managePreferences(Request $request, EntityManagerInterface $entityManager): Response
    {
        /** @var \App\Entity\Utilisateur $user */
        $user = $this->getUser();

        if (!$user || !$user->isChauffeur()) {
            $this->addFlash('error', 'Vous devez être chauffeur pour gérer vos préférences.');
            return $this->redirectToRoute('app_user_space');
        }

        if ($request->isMethod('POST')) {
            $preferenceName = $request->request->get('preference_name');

            if (!empty($preferenceName)) {
                $preference = new Preference();
                $preference->setName($preferenceName);
                $preference->setUtilisateur($user);

                $entityManager->persist($preference);
                $entityManager->flush();

                $this->addFlash('success', 'Préférence ajoutée avec succès.');
            } else {
                $this->addFlash('error', 'Le nom de la préférence ne peut pas être vide.');
            }

            return $this->redirectToRoute('app_user_preferences');
        }

        return $this->render('user/preferences.html.twig', [
            'preferences' => $user->getPreferences(),
        ]);
    }

    #[Route('/mon-espace/preferences/supprimer/{id}', name: 'app_user_delete_preference', methods: ['POST'])]
    public function deletePreference(Preference $preference, Request $request, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete_preference_' . $preference->getId(), $request->request->get('_token'))) {
            $entityManager->remove($preference);
            $entityManager->flush();

            $this->addFlash('success', 'Préférence supprimée avec succès.');
        } else {
            $this->addFlash('error', 'Token CSRF invalide.');
        }

        return $this->redirectToRoute('app_user_preferences');
    }

    #[Route('/mon-espace/vehicule/supprimer/{id}', name: 'app_user_delete_vehicle', methods: ['POST'])]
    public function deleteVehicle(Vehicule $vehicule, Request $request, EntityManagerInterface $entityManager): Response
    {
        /** @var \App\Entity\Utilisateur $user */
        $user = $this->getUser();

        // Vérifie si l'utilisateur connecté est bien le propriétaire du véhicule
        if ($vehicule->getUtilisateur() !== $user) {
            $this->addFlash('error', 'Vous ne pouvez pas supprimer ce véhicule.');
            return $this->redirectToRoute('app_user_space');
        }

        // Vérifie le token CSRF
        if ($this->isCsrfTokenValid('delete_vehicle_' . $vehicule->getId(), $request->request->get('_token'))) {
            $entityManager->remove($vehicule);
            $entityManager->flush();

            $this->addFlash('success', 'Véhicule supprimé avec succès.');
        } else {
            $this->addFlash('error', 'Token CSRF invalide.');
        }

        return $this->redirectToRoute('app_user_space');
    }

    #[Route('/mon-espace/vehicule/modifier/{id}', name: 'app_user_edit_vehicle')]
    public function editVehicle(Vehicule $vehicule, Request $request, EntityManagerInterface $entityManager): Response
    {
        /** @var \App\Entity\Utilisateur $user */
        $user = $this->getUser();

        // Vérifie si l'utilisateur connecté est bien le propriétaire du véhicule
        if ($vehicule->getUtilisateur() !== $user) {
            $this->addFlash('error', 'Vous ne pouvez pas modifier ce véhicule.');
            return $this->redirectToRoute('app_user_space');
        }

        if ($request->isMethod('POST')) {
            $plate = $request->request->get('plate');
            $registrationDate = $request->request->get('registration_date');
            $brand = $request->request->get('brand');
            $model = $request->request->get('model');
            $color = $request->request->get('color');
            $seats = $request->request->get('seats');
            $energy = $request->request->get('energy');

            // Validation basique
            if (empty($plate) || empty($registrationDate) || empty($brand) || empty($model) || empty($color) || empty($seats)) {
                $this->addFlash('error', 'Tous les champs obligatoires doivent être remplis.');
                return $this->redirectToRoute('app_user_edit_vehicle', ['id' => $vehicule->getId()]);
            }

            // Mise à jour des informations du véhicule
            $vehicule->setImmatriculation($plate);
            $vehicule->setDatePremiereImmatriculation(new \DateTime($registrationDate));
            $vehicule->setMarque($brand);
            $vehicule->setModele($model);
            $vehicule->setCouleur($color);
            $vehicule->setPlacesDispo((int) $seats);
            $vehicule->setEnergie($energy);

            $entityManager->flush();

            $this->addFlash('success', 'Véhicule modifié avec succès.');
            return $this->redirectToRoute('app_user_space');
        }

        return $this->render('user/edit_vehicle.html.twig', [
            'vehicule' => $vehicule,
        ]);
    }

    #[Route('/mon-espace/ajouter-voyage', name: 'app_user_add_trip')]
    public function addTrip(Request $request, EntityManagerInterface $entityManager): Response
    {
        /** @var \App\Entity\Utilisateur $user */
        $user = $this->getUser();

        if (!$user || !$user->isChauffeur()) {
            $this->addFlash('error', 'Vous devez être chauffeur pour ajouter un voyage.');
            return $this->redirectToRoute('app_user_space');
        }

        if ($request->isMethod('POST')) {
            $departure = $request->request->get('departure');
            $arrival = $request->request->get('arrival');
            $price = $request->request->get('price');
            $vehicleId = $request->request->get('vehicle');
            $preferences = $request->request->all('preferences');

            // Validation basique
            if (empty($departure) || empty($arrival) || empty($price) || empty($vehicleId)) {
                $this->addFlash('error', 'Tous les champs obligatoires doivent être remplis.');
                return $this->redirectToRoute('app_user_add_trip');
            }

            // Récupérer le véhicule sélectionné
            $vehicle = $entityManager->getRepository(Vehicule::class)->find($vehicleId);
            if (!$vehicle || $vehicle->getUtilisateur() !== $user) {
                $this->addFlash('error', 'Le véhicule sélectionné est invalide.');
                return $this->redirectToRoute('app_user_add_trip');
            }

            // Créer le voyage
            $trip = new Covoiturage();
            $trip->setAdresseDepart($departure);
            $trip->setAdresseArrivee($arrival);
            $trip->setPrix($price - 2); // Déduire 2 crédits pour la plateforme
            $trip->setVehicule($vehicle);
            foreach ($preferences as $preferenceId) {
                $preference = $entityManager->getRepository(Preference::class)->find($preferenceId);
                if ($preference && $preference->getUtilisateur() === $user) {
                    $trip->addPreference($preference);
                }
            }
            $trip->setChauffeur($user);

            $entityManager->persist($trip);
            $entityManager->flush();

            $this->addFlash('success', 'Votre voyage a été ajouté avec succès.');
            return $this->redirectToRoute('app_user_space');
        }

        return $this->render('user/add_trip.html.twig', [
            'vehicules' => $user->getVehicules(),
        ]);
    }

    #[Route('/mon-espace/ajouter-covoiturage', name: 'app_user_add_covoiturage')]
    public function addCovoiturage(Request $request, EntityManagerInterface $entityManager): Response
    {
        /** @var \App\Entity\Utilisateur $user */
        $user = $this->getUser();

        // Vérification si l'utilisateur est un chauffeur
        if (!$user || !$user->isChauffeur()) {
            $this->addFlash('error', 'Vous devez être chauffeur pour ajouter un covoiturage.');
            return $this->redirectToRoute('app_user_space');
        }

        if ($request->isMethod('POST')) {
            // Récupération des données du formulaire
            $departure = $request->request->get('departure');
            $arrival = $request->request->get('arrival');
            $departureTime = $request->request->get('departure_time');
            $arrivalTime = $request->request->get('arrival_time');
            $price = $request->request->get('price');
            $vehicleId = $request->request->get('vehicle');
            $placesDispo = $request->request->get('places_dispo'); // Récupérer le nombre de places disponibles
            $preferences = $request->request->all('preferences'); // Récupérer les préférences comme tableau

            // Vérifiez si les préférences sont bien un tableau
            if (!is_array($preferences)) {
                $preferences = [];
            }

            // Validation des champs obligatoires
            if (empty($departure) || empty($arrival) || empty($departureTime) || empty($arrivalTime) || empty($price) || empty($vehicleId) || empty($placesDispo)) {
                $this->addFlash('error', 'Tous les champs obligatoires doivent être remplis.');
                return $this->redirectToRoute('app_user_add_covoiturage');
            }

            // Conversion des dates
            try {
                $departureDateTime = new \DateTime($departureTime);
                $arrivalDateTime = new \DateTime($arrivalTime);

                // Formatez les heures en chaînes de caractères (format HH:mm)
                $heureDepart = $departureDateTime->format('H:i');
                $heureArrivee = $arrivalDateTime->format('H:i');
            } catch (\Exception $e) {
                $this->addFlash('error', 'Les dates et heures doivent être valides.');
                return $this->redirectToRoute('app_user_add_covoiturage');
            }

            // Récupérer le véhicule sélectionné
            $vehicle = $entityManager->getRepository(Vehicule::class)->find($vehicleId);
            if (!$vehicle || $vehicle->getUtilisateur() !== $user) {
                $this->addFlash('error', 'Le véhicule sélectionné est invalide.');
                return $this->redirectToRoute('app_user_add_covoiturage');
            }

            // Déterminer si le véhicule est écologique
            $ecologicalEnergies = ['électrique', 'hybride'];
            $isEcologique = in_array(strtolower($vehicle->getEnergie()), $ecologicalEnergies);

            // Créer le covoiturage
            $covoiturage = new Covoiturage();
            $covoiturage->setAdresseDepart($departure);
            $covoiturage->setAdresseArrivee($arrival);
            $covoiturage->setDateDepart($departureDateTime);
            $covoiturage->setDateArrivee($arrivalDateTime);
            $covoiturage->setHeureDepart($heureDepart);
            $covoiturage->setHeureArrivee($heureArrivee);
            $covoiturage->setPrix($price - 2); // Déduire 2 crédits pour la plateforme
            $covoiturage->setVehicule($vehicle);
            $covoiturage->setIsEcologique($isEcologique);
            $covoiturage->setPlacesRestantes((int) $placesDispo);
            $covoiturage->setChauffeur($user);

            // Ajouter les préférences
            foreach ($preferences as $preferenceId) {
                $preference = $entityManager->getRepository(Preference::class)->find($preferenceId);
                if ($preference && $preference->getUtilisateur() === $user) {
                    $covoiturage->addPreference($preference);
                }
            }

            // Sauvegarder le covoiturage
            $entityManager->persist($covoiturage);
            $entityManager->flush();

            $this->addFlash('success', 'Votre covoiturage a été ajouté avec succès.');
            return $this->redirectToRoute('app_user_space');
        }

        // Rendu du formulaire
        return $this->render('add_covoiturage.html.twig', [
            'vehicules' => $user->getVehicules(),
            'preferences' => $user->getPreferences(),
        ]);
    }

    #[Route('/mon-espace/covoiturage/{id}/modifier', name: 'app_user_edit_covoiturage')]
    public function editCovoiturage(int $id, Request $request, EntityManagerInterface $entityManager): Response
    {
        $covoiturage = $entityManager->getRepository(Covoiturage::class)->find($id);

        if (!$covoiturage) {
            $this->addFlash('error', 'Covoiturage introuvable.');
            return $this->redirectToRoute('app_user_space');
        }

        // Vérifiez si l'utilisateur connecté est bien le chauffeur du covoiturage
        if ($covoiturage->getChauffeur() !== $this->getUser()) {
            $this->addFlash('error', 'Vous n\'êtes pas autorisé à modifier ce covoiturage.');
            return $this->redirectToRoute('app_user_space');
        }

        // Récupération des préférences disponibles
        $preferences = $entityManager->getRepository(Preference::class)->findAll();

        // Gestion du formulaire de modification
        if ($request->isMethod('POST')) {
            $covoiturage->setAdresseDepart($request->request->get('adresseDepart'));
            $covoiturage->setAdresseArrivee($request->request->get('adresseArrivee'));
            $covoiturage->setDateDepart(new \DateTime($request->request->get('dateDepart')));
            $covoiturage->setDateArrivee(new \DateTime($request->request->get('dateArrivee')));
            $covoiturage->setPrix($request->request->get('prix'));
            $covoiturage->setPlacesRestantes($request->request->get('placesRestantes'));

            // Gestion des préférences
            $selectedPreferences = $request->request->all('preferences'); // Récupère un tableau ou une valeur par défaut vide
            if (!is_array($selectedPreferences)) {
                $selectedPreferences = []; // Assurez-vous que c'est un tableau
            }

            $covoiturage->getPreferences()->clear(); // Supprime les préférences existantes
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
            'preferences' => $preferences, // Ajout des préférences ici
        ]);
    }

    #[Route('/mon-espace/covoiturage/{id}/supprimer', name: 'app_user_delete_covoiturage', methods: ['POST'])]
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
}