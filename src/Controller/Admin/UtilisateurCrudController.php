<?php

namespace App\Controller\Admin;

use App\Entity\Utilisateur;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\EmailField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;

class UtilisateurCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Utilisateur::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->hideOnForm(),
            TextField::new('pseudo', 'Pseudo'),
            EmailField::new('email', 'Email'),
            TextField::new('password', 'Mot de passe')->onlyOnForms(), // Masquer dans la liste
            IntegerField::new('credits', 'Crédits')->hideOnForm(),
            NumberField::new('noteMoyenne', 'Note moyenne')->hideOnForm(),
            ImageField::new('photo', 'Photo')
                ->setBasePath('/uploads/photos') // Chemin pour afficher les images
                ->setUploadDir('public/uploads/photos') // Chemin pour uploader les images
                ->setUploadedFileNamePattern('[randomhash].[extension]')
                ->setRequired(false),
            BooleanField::new('isChauffeur', 'Chauffeur'),
            BooleanField::new('isPassager', 'Passager'),
            AssociationField::new('role', 'Rôle')
                ->setFormTypeOption('choice_label', 'name'), // Affiche le champ "name" de l'entité Role
            AssociationField::new('vehicules', 'Véhicules')->hideOnForm(),
            AssociationField::new('avis', 'Avis donnés')->hideOnForm(),
            AssociationField::new('avisReçus', 'Avis reçus')->hideOnForm(),
        ];
    }
}