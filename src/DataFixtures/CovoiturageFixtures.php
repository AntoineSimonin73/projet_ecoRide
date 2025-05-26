<?php

namespace App\DataFixtures;

use App\Entity\Covoiturage;
use App\Entity\Avis;
use App\Entity\Utilisateur;
use App\Entity\Role;
use App\Entity\Vehicule;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Faker\Factory;

class CovoiturageFixtures extends Fixture
{
    public function __construct(private UserPasswordHasherInterface $passwordHasher) {}

    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create('fr_FR');

        // Crée un rôle "ROLE_UTILISATEUR"
        $roleUtilisateur = new Role();
        $roleUtilisateur->setName('ROLE_UTILISATEUR');
        $manager->persist($roleUtilisateur);

        // Crée un rôle "ROLE_ADMIN"
        $roleAdmin = new Role();
        $roleAdmin->setName('ROLE_ADMIN');
        $manager->persist($roleAdmin);

        // Crée le rôle ROLE_EMPLOYE
        $roleEmploye = new Role();
        $roleEmploye->setName('ROLE_EMPLOYE');
        $manager->persist($roleEmploye);

        // Crée un compte administrateur
        $admin = new Utilisateur();
        $admin->setEmail('admin@example.com');
        $admin->setPseudo('admin');
        $admin->setPassword($this->passwordHasher->hashPassword($admin, 'adminpassword'));
        $admin->setRole($roleAdmin);
        $admin->setIsActive(true);
        $admin->setCredits(0); // Pas de crédits pour l'admin
        $admin->setIsChauffeur(false);
        $admin->setIsPassager(false);
        $manager->persist($admin);

        // Crée un compte employé
        $employe = new Utilisateur();
        $employe->setEmail('employe@example.com');
        $employe->setPseudo('employe');
        $employe->setPassword($this->passwordHasher->hashPassword($employe, 'employepassword'));
        $employe->setRole($roleEmploye);
        $employe->setIsActive(true);
        $employe->setCredits(0); // Pas de crédits pour l'employé
        $employe->setIsChauffeur(false);
        $employe->setIsPassager(false);
        $manager->persist($employe);

        // Crée des utilisateurs avec des véhicules
        $utilisateurs = [];
        for ($i = 0; $i < 10; $i++) {
            $utilisateur = new Utilisateur();
            $utilisateur->setEmail($faker->email);
            $utilisateur->setPseudo($faker->userName);
            $utilisateur->setPassword($this->passwordHasher->hashPassword($utilisateur, 'password' . $i));
            $utilisateur->setRole($roleUtilisateur); // Tous les utilisateurs ont le rôle "ROLE_UTILISATEUR"
            $utilisateur->setIsActive(true);
            $utilisateur->setCredits($faker->numberBetween(10, 100));
            $utilisateur->setIsChauffeur(true);
            $utilisateur->setIsPassager(true);
            $manager->persist($utilisateur);

            // Associe un véhicule à chaque utilisateur
            $vehicule = new Vehicule();
            $vehicule->setUtilisateur($utilisateur);
            $vehicule->setMarque($faker->randomElement(['Tesla', 'Renault', 'Peugeot']));
            $vehicule->setModele($faker->word);
            $vehicule->setEnergie($faker->randomElement(['Électrique', 'hybride', 'essence', 'diesel']));
            $vehicule->setCouleur($faker->safeColorName);
            $vehicule->setImmatriculation($faker->regexify('[A-Z]{2}-[0-9]{3}-[A-Z]{2}'));
            $vehicule->setDatePremiereImmatriculation($faker->dateTimeBetween('-5 years', 'now'));
            $vehicule->setPlacesDispo($faker->numberBetween(2, 5));
            $manager->persist($vehicule);

            $utilisateurs[] = ['utilisateur' => $utilisateur, 'vehicule' => $vehicule];
            $vehicules[] = $vehicule; // Collect all vehicles into an array
        }

        // Crée des covoiturages
        $covoiturages = []; // Stocke les covoiturages créés
        for ($i = 0; $i < 30; $i++) {
            $data = $faker->randomElement($utilisateurs);
            $utilisateur = $data['utilisateur'];
            $vehicule = $data['vehicule'];

            // Sélectionne un passager différent du chauffeur
            $passagerData = $faker->randomElement(array_filter($utilisateurs, fn($u) => $u['utilisateur'] !== $utilisateur));
            $passager = $passagerData['utilisateur'];

            $covoiturage = new Covoiturage();
            $covoiturage->setChauffeur($utilisateur);
            $covoiturage->setPassager($passager);
            $covoiturage->setVehicule($vehicule);
            $covoiturage->setAdresseDepart($faker->address);
            $covoiturage->setAdresseArrivee($faker->address);

            // Définir les heures sous forme de variables
            $heureDepart = $faker->numberBetween(6, 20);
            $minuteDepart = $faker->randomElement([0, 15, 30, 45]);
            $heureArrivee = $heureDepart + $faker->numberBetween(1, 5);
            $minuteArrivee = $minuteDepart;

            // Date de départ
            $dateDepart = $faker->dateTimeBetween('-30 days', '+30 days')->setTime($heureDepart, $minuteDepart, 0);
            // Date d'arrivée
            $dateArrivee = (clone $dateDepart)->setTime($heureArrivee, $minuteArrivee, 0);

            $covoiturage->setDateDepart($dateDepart);
            $covoiturage->setDateArrivee($dateArrivee);
            $covoiturage->setHeureDepart(sprintf('%02dh%02d', $heureDepart, $minuteDepart));
            $covoiturage->setHeureArrivee(sprintf('%02dh%02d', $heureArrivee, $minuteArrivee));
            $covoiturage->setPrix($faker->randomFloat(2, 5, 50)); // Prix entre 5 et 50
            $covoiturage->setPlacesRestantes($vehicule->getPlacesDispo() - $faker->numberBetween(0, $vehicule->getPlacesDispo()));
            $covoiturage->setIsEcologique($vehicule->getEnergie() === 'électrique');

            $manager->persist($covoiturage);
            $covoiturages[] = $covoiturage; // Ajoute le covoiturage au tableau
        }

        // Crée des covoiturages problématiques
        for ($i = 0; $i < 5; $i++) {
            $chauffeurData = $faker->randomElement($utilisateurs);
            $chauffeur = $chauffeurData['utilisateur']; // Extraire uniquement l'utilisateur

            $passagerData = $faker->randomElement(array_filter($utilisateurs, fn($u) => $u['utilisateur'] !== $chauffeur));
            $passager = $passagerData['utilisateur']; // Extraire uniquement l'utilisateur

            $vehicule = $faker->randomElement($vehicules);

            $covoiturage = new Covoiturage();
            $covoiturage->setChauffeur($chauffeur);
            $covoiturage->setPassager($passager);
            $covoiturage->setVehicule($vehicule);
            $covoiturage->setAdresseDepart($faker->address);
            $covoiturage->setAdresseArrivee($faker->address);
            $covoiturage->setDateDepart($faker->dateTimeBetween('-30 days', 'now'));
            $covoiturage->setDateArrivee($faker->dateTimeBetween('now', '+30 days'));
            $covoiturage->setHeureDepart(sprintf('%02dh%02d', $heureDepart, $minuteDepart));
            $covoiturage->setHeureArrivee(sprintf('%02dh%02d', $heureArrivee, $minuteArrivee));
            $covoiturage->setIsEcologique($vehicule->getEnergie() === 'électrique');
            $covoiturage->setPlacesRestantes($vehicule->getPlacesDispo() - $faker->numberBetween(0, $vehicule->getPlacesDispo()));
            $covoiturage->setPrix($faker->randomFloat(2, 5, 50)); // Prix entre 5 et 50
            $covoiturage->setStatus('probleme'); // Définit le statut comme "problème"
            $manager->persist($covoiturage);
        }

        // Crée des avis en attente de validation
        for ($i = 0; $i < 5; $i++) {
            $auteurData = $faker->randomElement($utilisateurs);
            $auteur = $auteurData['utilisateur']; // Extraire uniquement l'utilisateur

            $covoiturage = $faker->randomElement($covoiturages); // Utilise les covoiturages créés

            $avis = new Avis();
            $avis->setAuteur($auteur);
            $avis->setDestinataire($covoiturage->getChauffeur());
            $avis->setCovoiturage($covoiturage);
            $avis->setCommentaires($faker->sentence);
            $avis->setIsValide(false); // Avis en attente de validation
            $avis->setNote($faker->numberBetween(1, 5)); // Note entre 1 et 5
            $avis->setDate($faker->dateTimeBetween('-30 days', 'now'));
            $manager->persist($avis);
        }

        $manager->flush();
    }
}
