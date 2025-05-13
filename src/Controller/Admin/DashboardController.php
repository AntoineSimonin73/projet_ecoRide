<?php

namespace App\Controller\Admin;

use App\Entity\Utilisateur;
use App\Entity\Vehicule;
use App\Entity\Covoiturage;
use App\Entity\Preference;
use App\Entity\Avis;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;

class DashboardController
{
    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToDashboard('Tableau de bord', 'fa fa-home');
        yield MenuItem::linkToCrud('Utilisateurs', 'fas fa-user', Utilisateur::class);
        yield MenuItem::linkToCrud('Véhicules', 'fas fa-car', Vehicule::class);
        yield MenuItem::linkToCrud('Covoiturages', 'fas fa-road', Covoiturage::class);
        yield MenuItem::linkToCrud('Participations', 'fas fa-users', Preference::class);
        yield MenuItem::linkToCrud('Avis', 'fas fa-comment', Avis::class);
    }
}
