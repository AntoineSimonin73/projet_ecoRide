<?php
namespace App\Controller;

use App\Service\RideStatsService;
use Doctrine\ODM\MongoDB\DocumentManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RideController extends AbstractController
{
    private RideStatsService $rideStatsService;
    private DocumentManager $documentManager;

    public function __construct(RideStatsService $rideStatsService, DocumentManager $documentManager)
    {
        $this->rideStatsService = $rideStatsService;
        $this->documentManager = $documentManager;
    }

    #[Route('/ride/complete', name: 'ride_complete')]
    public function completeRide(): Response
    {
        // Exemple : Date actuelle et crédits gagnés
        $date = new \DateTime();
        $creditsEarned = 2;

        // Enregistrer les statistiques
        $this->rideStatsService->recordRide($date, $creditsEarned);

        return $this->json(['message' => 'Ride completed and stats updated']);
    }

    #[Route('/stats', name: 'ride_stats')]
    public function stats(): Response
    {
        // Définir une plage de dates pour les statistiques (par exemple, les 7 derniers jours)
        $startDate = (new \DateTime())->modify('-7 days')->setTime(0, 0, 0);
        $endDate = (new \DateTime())->setTime(23, 59, 59);
        $repository = $this->documentManager->getRepository(\App\Document\RideStats::class);
        // Récupérer les statistiques via le repository
        $repository = $this->documentManager->getRepository(\App\Document\RideStats::class);
        if (!$repository instanceof \App\Repository\RideStatsRepository) {
            throw new \LogicException('Expected RideStatsRepository.');
        }
        $stats = $repository->getStatsByDateRange($startDate, $endDate);

        // Retourner les statistiques sous forme de réponse JSON
        return $this->json($stats);
    }
}