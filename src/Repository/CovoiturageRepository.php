<?php

namespace App\Repository;

use App\Entity\Covoiturage;
use App\Entity\Utilisateur;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Covoiturage>
 */
class CovoiturageRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Covoiturage::class);
    }

    /**
     * Récupère l'historique des covoiturages d'un utilisateur.
     */
    public function findByUserHistorique(Utilisateur $user): array
    {
        return $this->createQueryBuilder('c')
            ->leftJoin('c.passagers', 'p')
            ->where('c.chauffeur = :user OR p = :user')
            ->andWhere('c.dateDepart < :now') // Historique : covoiturages passés
            ->setParameter('user', $user)
            ->setParameter('now', new \DateTime())
            ->orderBy('c.dateDepart', 'DESC')
            ->getQuery()
            ->getResult();
    }
}
