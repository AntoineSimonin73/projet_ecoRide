<?php
namespace App\Repository;

use App\Document\RideStats;
use Doctrine\ODM\MongoDB\Repository\DocumentRepository;

class RideStatsRepository extends DocumentRepository
{
    public function findOrCreateByDate(\DateTime $date): RideStats
    {
        // Rechercher un document existant pour la date donnée
        $startOfDay = (clone $date)->setTime(0, 0, 0);
        $endOfDay = (clone $date)->setTime(23, 59, 59);

        $rideStats = $this->createQueryBuilder()
            ->field('date')->gte($startOfDay)
            ->field('date')->lte($endOfDay)
            ->getQuery()
            ->getSingleResult();

        // Si aucun document n'existe, en créer un nouveau
        if (!$rideStats) {
            $rideStats = new RideStats($startOfDay);
            $this->dm->persist($rideStats);
            $this->dm->flush();
        }

        return $rideStats;
    }

    public function getStatsByDateRange(\DateTime $startDate, \DateTime $endDate): array
    {
        return $this->createQueryBuilder()
            ->field('date')->gte($startDate)
            ->field('date')->lte($endDate)
            ->getQuery()
            ->toArray();
    }
}