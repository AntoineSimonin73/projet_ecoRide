<?php
namespace App\Controller;

use App\Entity\Covoiturage;
use App\Entity\Avis;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\AvisService;

class EmployeController extends AbstractController
{
    #[Route('/employe', name: 'app_employe_space')]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $this->denyAccessUnlessGranted('ROLE_EMPLOYE');

        // Récupère les covoiturages non archivés
        $covoiturages = $entityManager->getRepository(Covoiturage::class)->findBy([
            'isArchived' => false,
        ]);

        // Récupère les avis en attente de validation
        $avisEnAttente = $entityManager->getRepository(Avis::class)->findBy([
            'isValide' => false,
        ]);

        // Récupère les covoiturages problématiques
        $covoituragesProblemes = $entityManager->createQuery(
            'SELECT c, chauffeur, passagers
             FROM App\Entity\Covoiturage c
             JOIN c.chauffeur chauffeur
             LEFT JOIN c.passagers passagers
             WHERE c.status = :status'
        )->setParameter('status', 'probleme')->getResult();

        return $this->render('employe/space.html.twig', [
            'covoiturages' => $covoiturages,
            'avisEnAttente' => $avisEnAttente,
            'covoituragesProblemes' => $covoituragesProblemes,
        ]);
    }

    #[Route('/employe/avis/{id}/valider', name: 'app_employe_valider_avis', methods: ['POST'])]
    public function validerAvis(int $id, EntityManagerInterface $entityManager, AvisService $avisService): Response
    {
        $avis = $entityManager->getRepository(Avis::class)->find($id);

        if (!$avis) {
            $this->addFlash('error', 'Avis introuvable.');
            return $this->redirectToRoute('app_employe_space');
        }

        $avis->setIsValide(true); // Marque l'avis comme validé
        $entityManager->flush();

        // Vérifie si le covoiturage peut être archivé
        $covoiturage = $avis->getCovoiturage();
        $this->archiveCovoiturageIfValidated($covoiturage, $entityManager);

        // Met à jour la note moyenne du chauffeur
        $avisService->updateNoteMoyenne($avis->getDestinataire());

        $this->addFlash('success', 'Avis validé avec succès.');
        return $this->redirectToRoute('app_employe_space');

    }

    #[Route('/employe/avis/{id}/refuser', name: 'app_employe_refuser_avis', methods: ['POST'])]
    public function refuserAvis(int $id, EntityManagerInterface $entityManager): Response
    {
        $avis = $entityManager->getRepository(Avis::class)->find($id);

        if (!$avis) {
            $this->addFlash('error', 'Avis introuvable.');
            return $this->redirectToRoute('app_employe_space');
        }

        $entityManager->remove($avis);
        $entityManager->flush();

        $this->addFlash('success', 'Avis refusé avec succès.');
        return $this->redirectToRoute('app_employe_space');
    }

    private function archiveCovoiturageIfValidated(Covoiturage $covoiturage, EntityManagerInterface $entityManager): void
    {
        // Vérifie si le covoiturage a le statut "termine"
        if ($covoiturage->getStatus() !== 'termine') {
            return; // Ne pas archiver si le covoiturage n'est pas terminé
        }

        // Vérifie si tous les passagers ont soumis un avis validé
        foreach ($covoiturage->getPassagers() as $passager) {
            $avis = $entityManager->getRepository(Avis::class)->findOneBy([
                'covoiturage' => $covoiturage,
                'auteur' => $passager,
                'isValide' => true, // Vérifie que l'avis est validé
            ]);

            if (!$avis) {
                return; // Si un passager n'a pas soumis d'avis validé, ne pas archiver
            }
        }

        // Si tous les passagers ont validé, archive le covoiturage
        $covoiturage->setIsArchived(true);
        $entityManager->persist($covoiturage);
        $entityManager->flush();
    }
}