<?php

namespace App\Controller\Admin;

use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;


#[Route('/admin')]
class DashboardController extends AbstractDashboardController
{
    public function configureCrud(): Crud
    {
        return Crud::new()
            ->setEntityLabelInSingular('Covoiturage')
            ->setEntityLabelInPlural('Covoiturages')
            // Ajout des contraintes sur les routes
            // Removed invalid method call: setRouteDetail
            // Removed invalid method call: setRouteEdit
            // Removed invalid method call: setRouteDelete
        ;
    }
}