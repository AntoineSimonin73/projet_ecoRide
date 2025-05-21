<?php

namespace App\Controller\Admin;

use App\Entity\Utilisateur;
use App\Entity\Vehicule;
use App\Entity\Covoiturage;
<<<<<<< HEAD
use App\Entity\Preference;
use App\Entity\Avis;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;

class DashboardController
{
=======
use App\Entity\Avis;
use App\Entity\Role;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;


#[Route('/admin')]
class DashboardController extends AbstractDashboardController
{
    #[Route('/', name: 'app_admin', methods: ['GET'])]
    public function index(): Response
    {
        return $this->render('admin/dashboard.html.twig');
        
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('EcoRide Admin');
    }

>>>>>>> back_end
    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToDashboard('Tableau de bord', 'fas fa-chart-line');
        yield MenuItem::linkToCrud('Utilisateurs', 'fas fa-user', Utilisateur::class);
        yield MenuItem::linkToCrud('Véhicules', 'fas fa-car', Vehicule::class);
        yield MenuItem::linkToCrud('Covoiturages', 'fas fa-road', Covoiturage::class);
<<<<<<< HEAD
        yield MenuItem::linkToCrud('Participations', 'fas fa-users', Preference::class);
        yield MenuItem::linkToCrud('Avis', 'fas fa-comment', Avis::class);
=======
        yield MenuItem::linkToCrud('Avis', 'fas fa-comment', Avis::class);
        yield MenuItem::linkToCrud('Rôles', 'fas fa-user-tag', Role::class);
<<<<<<< HEAD
        yield MenuItem::linkToLogout('Déconnexion', 'fa fa-sign-out');
>>>>>>> back_end
=======
        yield MenuItem::linkToRoute('Retour à l\'accueil', 'fas fa-home', 'app_home');
>>>>>>> frontend
    }
}
