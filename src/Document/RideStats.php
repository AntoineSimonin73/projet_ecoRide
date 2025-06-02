<?php

namespace App\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
use Doctrine\ODM\MongoDB\Repository\DocumentRepository;

#[MongoDB\Document(repositoryClass: "App\Repository\RideStatsRepository")]
class RideStats
{
    #[MongoDB\Id]
    private string $id;

    #[MongoDB\Field(type: "date")]
    private \DateTime $date;

    #[MongoDB\Field(type: "int")]
    private int $rideCount = 0;

    #[MongoDB\Field(type: "int")]
    private float $creditsEarned = 0;

    public function __construct(\DateTime $date)
    {
        $this->date = $date;
    }

    public function incrementRideCount(int $count = 1): void
    {
        $this->rideCount += $count;
    }

    public function addCredits(float $credits): void
    {
        $this->creditsEarned += $credits;
    }

    public function getDate(): \DateTime
    {
        return $this->date;
    }

    public function getRideCount(): int
    {
        return $this->rideCount;
    }

    public function getCreditsEarned(): float
    {
        return $this->creditsEarned;
    }
}

namespace App\Repository;

use Doctrine\ODM\MongoDB\Repository\DocumentRepository;

class RideStatsRepository extends DocumentRepository
{
    public function getStatsByDateRange(\DateTime $startDate, \DateTime $endDate): array
    {
        return $this->createQueryBuilder()
            ->field('date')->gte($startDate)->lte($endDate)
            ->getQuery()
            ->toArray();
    }
}