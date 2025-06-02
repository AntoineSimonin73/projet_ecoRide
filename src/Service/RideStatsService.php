<?php
namespace App\Service;

use App\Document\RideStats;
use Doctrine\ODM\MongoDB\DocumentManager;

class RideStatsService
{
    private DocumentManager $dm;

    public function __construct(DocumentManager $dm)
    {
        $this->dm = $dm;
    }

    public function recordRide(\DateTime $date, float $creditsEarned): void
    {
        $repository = $this->dm->getRepository(RideStats::class);

        // Find or create the RideStats document for the given date
        $rideStats = $repository->findOrCreateByDate($date);

        // Update the ride count and credits earned
        $rideStats->incrementRideCount();
        $rideStats->addCredits($creditsEarned);

        // Persist changes
        $this->dm->flush();
    }
}