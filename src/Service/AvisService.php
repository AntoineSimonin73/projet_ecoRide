<?php
namespace App\Service;

use App\Entity\Avis;
use App\Entity\Utilisateur;
use Doctrine\ORM\EntityManagerInterface;

class AvisService
{
    private EntityManagerInterface $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    /**
     * Recalcule la note moyenne d'un chauffeur en fonction des avis validés.
     *
     * @param Utilisateur $chauffeur
     */
    public function updateNoteMoyenne(Utilisateur $chauffeur): void
    {
        $avisRepository = $this->entityManager->getRepository(Avis::class);

        // Récupère tous les avis validés pour le chauffeur
        $avisValides = $avisRepository->findBy([
            'destinataire' => $chauffeur,
            'isValide' => true,
        ]);

        if (count($avisValides) === 0) {
            $chauffeur->setNoteMoyenne(0.0); // Pas de note si aucun avis
        } else {
            $sommeNotes = array_reduce($avisValides, function ($carry, Avis $avis) {
                return $carry + $avis->getNote();
            }, 0);

            $noteMoyenne = $sommeNotes / count($avisValides);
            $chauffeur->setNoteMoyenne(round($noteMoyenne, 2)); // Arrondi à 2 décimales
        }

        // Persiste la mise à jour de la note moyenne
        $this->entityManager->persist($chauffeur);
        $this->entityManager->flush();
    }
}