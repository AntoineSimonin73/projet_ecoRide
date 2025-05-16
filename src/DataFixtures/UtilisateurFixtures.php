<?php

namespace App\DataFixtures;

use App\Entity\Utilisateur;
use App\Entity\Vehicule;
use App\Entity\Covoiturage;
use App\Entity\Role; // Import de l'entité Role
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UtilisateurFixtures extends Fixture
{
    public function __construct(private UserPasswordHasherInterface $passwordHasher) {}

    public function load(ObjectManager $manager): void
    {
        // Créer un rôle "ROLE_USER"
        $roleUser = new Role();
        $roleUser->setName('ROLE_USER'); // Utilisez le format attendu par Symfony
        $manager->persist($roleUser);

        // Créer un rôle "ROLE_ADMIN"
        $roleAdmin = new Role();
        $roleAdmin->setName('ROLE_ADMIN'); // Utilisez le format attendu par Symfony
        $manager->persist($roleAdmin);

        // Créer un rôle "ROLE_EMPLOYE"
        $roleEmploye = new Role();
        $roleEmploye->setName('Employé');
        $manager->persist($roleEmploye);

        // Créer un utilisateur avec le rôle "ROLE_ADMIN"
        $admin = new Utilisateur();
        $admin->setPseudo("admin");
        $admin->setEmail("admin@example.com");
        $admin->setCredits(100);
        $admin->setIsChauffeur(false);
        $admin->setIsPassager(false);
        $admin->setRole($roleAdmin); // Associer le rôle "ROLE_ADMIN"

        $hashedPassword = $this->passwordHasher->hashPassword($admin, "adminpassword");
        $admin->setPassword($hashedPassword);

        $manager->persist($admin);

        // Créer des utilisateurs avec le rôle "ROLE_USER"
        $firstUser = null;
        for ($i = 1; $i <= 5; $i++) {
            $user = new Utilisateur();
            $user->setPseudo("user$i");
            $user->setEmail("user$i@example.com");
            $user->setCredits(20);
            $user->setIsChauffeur(true);
            $user->setIsPassager(true);
            $user->setRole($roleUser); // Associer le rôle "ROLE_USER"
            $user->setNoteMoyenne(4.5); // Note moyenne fictive

            $hashedPassword = $this->passwordHasher->hashPassword($user, "password$i");
            $user->setPassword($hashedPassword);

            $manager->persist($user);

            // Ajouter un véhicule pour cet utilisateur
            $vehicule = new Vehicule();
            $vehicule->setUtilisateur($user);
            $vehicule->setMarque("Tesla");
            $vehicule->setModele("Model $i");
            $vehicule->setEnergie("électrique");
            $vehicule->setCouleur("bleu");
            $vehicule->setImmatriculation("EV-000$i");
            $vehicule->setDatePremiereImmatriculation(new \DateTime('2021-01-01'));
            $vehicule->setPlacesDispo(3);

            $manager->persist($vehicule);

            // Ajouter un covoiturage
            $covoiturage = new Covoiturage();
            $covoiturage->setChauffeur($user);
            $covoiturage->setVehicule($vehicule);
            $covoiturage->setAdresseDepart("10 rue des lilas");
            $covoiturage->setAdresseArrivee("20 avenue des fleurs");
            
            // Définir les heures sous forme de variables
            $heureDepart = 10;
            $minuteDepart = 0;
            $heureArrivee = 15;
            $minuteArrivee = 0;

            // Date de départ
            $dateDepart = (new \DateTime('+2 days'))->setTime($heureDepart, $minuteDepart, 0);
            // Date d'arrivée
            $dateArrivee = (new \DateTime('+2 days'))->setTime($heureArrivee, $minuteArrivee, 0);

            $covoiturage->setDateDepart($dateDepart);
            $covoiturage->setDateArrivee($dateArrivee);
            $covoiturage->setHeureDepart(sprintf('%02dh%02d', $heureDepart, $minuteDepart));
            $covoiturage->setHeureArrivee(sprintf('%02dh%02d', $heureArrivee, $minuteArrivee));
            $covoiturage->setPrix(15);
            $covoiturage->setPlacesRestantes(3);
            $covoiturage->setIsEcologique(true);

            $manager->persist($covoiturage);

            if ($i === 1) {
                $firstUser = $user;
            }
        }

        if ($firstUser) {
            // Ajouter un covoiturage Lyon -> Paris non écologique pour le premier utilisateur
            $vehicule = new Vehicule();
            $vehicule->setUtilisateur($firstUser);
            $vehicule->setMarque("Renault");
            $vehicule->setModele("Clio");
            $vehicule->setEnergie("essence");
            $vehicule->setCouleur("rouge");
            $vehicule->setImmatriculation("LY-123-PA");
            $vehicule->setDatePremiereImmatriculation(new \DateTime('2020-06-15'));
            $vehicule->setPlacesDispo(3);
            $manager->persist($vehicule);

            $covoiturage = new Covoiturage();
            $covoiturage->setChauffeur($firstUser);
            $covoiturage->setVehicule($vehicule);
            $covoiturage->setAdresseDepart("Lyon");
            $covoiturage->setAdresseArrivee("Paris");
            $dateDepart = (new \DateTime('+3 days'))->setTime(8, 0, 0);
            $dateArrivee = (clone $dateDepart)->modify('+5 hours')->setTime(13, 0, 0);

            $covoiturage->setDateDepart($dateDepart);
            $covoiturage->setDateArrivee($dateArrivee);
            $covoiturage->setHeureDepart("08h00");
            $covoiturage->setHeureArrivee("13h00");
            $covoiturage->setPrix(25);
            $covoiturage->setPlacesRestantes(2);
            $covoiturage->setIsEcologique(false);

            $manager->persist($covoiturage);
        }

        $manager->flush();
    }
}