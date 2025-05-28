<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Vehicule;
use App\Entity\Preference;
use App\Form\ChangePasswordFormType;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserController extends AbstractController
{
    #[Route('/mon-espace', name: 'app_user_space')]
    public function userSpace(Request $request, EntityManagerInterface $entityManager, UserPasswordHasherInterface $passwordHasher): Response
    {
        /** @var \App\Entity\Utilisateur $user */
        $user = $this->getUser();

        if (!$user) {
            $this->addFlash('error', 'Vous devez être connecté pour accéder à votre espace.');
            return $this->redirectToRoute('app_login');
        }

        // Créer le formulaire de changement de mot de passe
        $form = $this->createForm(ChangePasswordFormType::class);
        $form->handleRequest($request);

        // Gestion du changement de mot de passe
        if ($form->isSubmitted() && $form->isValid()) {
            $currentPassword = $form->get('currentPassword')->getData();
            $newPassword = $form->get('plainPassword')->getData();
            $confirmPassword = $form->get('confirmPassword')->getData();

            // Vérifier que le mot de passe actuel est correct
            if (!$passwordHasher->isPasswordValid($user, $currentPassword)) {
                $this->addFlash('error', 'Le mot de passe actuel est incorrect.');
                return $this->redirectToRoute('app_user_space');
            }

            // Vérifier que les nouveaux mots de passe correspondent
            if ($newPassword !== $confirmPassword) {
                $this->addFlash('error', 'Les nouveaux mots de passe ne correspondent pas.');
                return $this->redirectToRoute('app_user_space');
            }

            // Mettre à jour le mot de passe
            $user->setPassword($passwordHasher->hashPassword($user, $newPassword));
            $entityManager->flush();

            $this->addFlash('success', 'Votre mot de passe a été modifié avec succès.');
            return $this->redirectToRoute('app_user_space');
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
            'changePasswordForm' => $form->createView(), // Transmettre le formulaire au template

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

            $plate = $request->request->get('immatriculation');
            $registrationDate = $request->request->get('datePremiereImmatriculation');
            $brand = $request->request->get('marque');
            $model = $request->request->get('modele');
            $color = $request->request->get('couleur');
            $seats = $request->request->get('placesDispo');
            $energy = $request->request->get('energie');

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
            $plate = $request->request->get('immatriculation');
            $registrationDate = $request->request->get('datePremiereImmatriculation');
            $brand = $request->request->get('marque');
            $model = $request->request->get('modele');
            $color = $request->request->get('couleur');
            $seats = $request->request->get('placesDispo');
            $energy = $request->request->get('energie');

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
}