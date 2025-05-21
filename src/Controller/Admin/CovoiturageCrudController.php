<?php

namespace App\Controller\Admin;

use App\Entity\Covoiturage;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
<<<<<<< HEAD
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
=======
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\CollectionField;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
>>>>>>> back_end

class CovoiturageCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Covoiturage::class;
    }

<<<<<<< HEAD
    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
=======
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->hideOnForm(),
            TextField::new('adresseDepart', 'Adresse de départ'),
            TextField::new('adresseArrivee', 'Adresse d\'arrivée'),
            DateTimeField::new('dateDepart', 'Date de départ'),
            DateTimeField::new('dateArrivee', 'Date d\'arrivée'),
            CollectionField::new('preferences', 'Ce que j\'autorise pendant mon trajet')
                ->setEntryType(TextType::class) // Chaque préférence sera une chaîne de caractères
                ->setFormTypeOptions([
                    'allow_add' => true, // Permet d'ajouter de nouvelles préférences
                    'allow_delete' => true, // Permet de supprimer des préférences
                    'by_reference' => false, // Nécessaire pour gérer une collection
                ]),
        ];
    }
>>>>>>> back_end
}
