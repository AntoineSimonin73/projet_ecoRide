<?php

namespace App\Controller\Admin;

use App\Entity\Utilisateur;
use App\Entity\Vehicule;
use App\Entity\Covoiturage;
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
    #[Route('/', name: 'admin_dashboard', methods: ['GET'])]
    public function index(): Response
    {
        return $this->render('admin/dashboard.html.twig');
        
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('EcoRide Admin');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToDashboard('Tableau de bord', 'fa fa-home');
        yield MenuItem::linkToCrud('Utilisateurs', 'fas fa-user', Utilisateur::class);
        yield MenuItem::linkToCrud('Véhicules', 'fas fa-car', Vehicule::class);
        yield MenuItem::linkToCrud('Covoiturages', 'fas fa-road', Covoiturage::class);
        yield MenuItem::linkToCrud('Avis', 'fas fa-comment', Avis::class);
        yield MenuItem::linkToCrud('Rôles', 'fas fa-user-tag', Role::class);
        yield MenuItem::linkToLogout('Déconnexion', 'fa fa-sign-out');
    }
}
