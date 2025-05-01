<?php

namespace App\Repository;

use App\Entity\Co2Emissions;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class Co2EmissionsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Co2Emissions::class);
    }

    public function findLatestByVoiture(int $voitureId): ?Co2Emissions
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.voiture = :voitureId')
            ->setParameter('voitureId', $voitureId)
            ->orderBy('c.createdAt', 'DESC')
            ->setMaxResults(1)
            ->getQuery()
            ->getOneOrNullResult();
    }
} 