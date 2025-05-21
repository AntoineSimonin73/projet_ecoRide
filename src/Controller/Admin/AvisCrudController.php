<?php

namespace App\Controller\Admin;

use App\Entity\Avis;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;

class AvisCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Avis::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->hideOnForm(), // Masquer l'ID dans le formulaire
            IntegerField::new('note', 'Note'), // Champ pour la note
            TextareaField::new('commentaires', 'Commentaires'), // Champ pour les commentaires
            DateField::new('date', 'Date'), // Champ pour la date
            AssociationField::new('auteur', 'Auteur') // Relation avec l'utilisateur auteur
                ->setFormTypeOption('choice_label', 'pseudo'), // Affiche le pseudo de l'utilisateur
            AssociationField::new('destinataire', 'Destinataire') // Relation avec l'utilisateur destinataire
                ->setFormTypeOption('choice_label', 'pseudo'), // Affiche le pseudo de l'utilisateur
            AssociationField::new('covoiturage', 'Covoiturage') // Relation avec le covoiturage
                ->setFormTypeOption('choice_label', 'adresseDepart'), // Affiche l'adresse de départ du covoiturage
            BooleanField::new('isValide', 'Validé'), // Champ pour indiquer si l'avis est validé
        ];
    }
}
