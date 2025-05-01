<?php

namespace App\Repository;

use App\Entity\Avis;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Avis>
 *
 * @method Avis|null find($id, $lockMode = null, $lockVersion = null)
 * @method Avis|null findOneBy(array $criteria, array $orderBy = null)
 * @method Avis[]    findAll()
 * @method Avis[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AvisRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Avis::class);
    }

    /**
     * Find reviews for a specific driver
     *
     * @param int $driverId The ID of the driver
     * @return Avis[] Returns an array of Avis objects
     */
    public function findByDriver(int $driverId): array
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.conducteur = :driverId')
            ->setParameter('driverId', $driverId)
            ->orderBy('a.date', 'DESC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Find reviews for a specific passenger
     *
     * @param int $passengerId The ID of the passenger
     * @return Avis[] Returns an array of Avis objects
     */
    public function findByPassenger(int $passengerId): array
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.passager = :passengerId')
            ->setParameter('passengerId', $passengerId)
            ->orderBy('a.date', 'DESC')
            ->getQuery()
            ->getResult();
    }
    
    /**
     * Find latest reviews
     *
     * @param int $limit The maximum number of reviews to return
     * @return Avis[] Returns an array of Avis objects
     */
    public function findLatest(int $limit = 5): array
    {
        return $this->createQueryBuilder('a')
            ->orderBy('a.date', 'DESC')
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }
    
    /**
     * Get the average rating across all reviews
     *
     * @return float The average rating
     */
    public function getAverageRating(): float
    {
        try {
            return (float) $this->createQueryBuilder('a')
                ->select('AVG(a.note)')
                ->getQuery()
                ->getSingleScalarResult();
        } catch (\Exception $e) {
            return 0;
        }
    }
    
    /**
     * Count reviews with a specific rating
     *
     * @param int $rating The rating value (1-5)
     * @return int The number of reviews with the given rating
     */
    public function countByRating(int $rating): int
    {
        try {
            return $this->createQueryBuilder('a')
                ->select('COUNT(a.id)')
                ->where('a.note = :rating')
                ->setParameter('rating', $rating)
                ->getQuery()
                ->getSingleScalarResult();
        } catch (\Exception $e) {
            return 0;
        }
    }
    
    /**
     * Count reviews submitted this week
     *
     * @return int The number of reviews submitted this week
     */
    public function countThisWeek(): int
    {
        $startOfWeek = new \DateTime('monday this week');
        $endOfWeek = new \DateTime('sunday this week');
        $endOfWeek->setTime(23, 59, 59);
        
        try {
            return $this->createQueryBuilder('a')
                ->select('COUNT(a.id)')
                ->where('a.date >= :startOfWeek')
                ->andWhere('a.date <= :endOfWeek')
                ->setParameter('startOfWeek', $startOfWeek)
                ->setParameter('endOfWeek', $endOfWeek)
                ->getQuery()
                ->getSingleScalarResult();
        } catch (\Exception $e) {
            return 0;
        }
    }
    
    /**
     * Get the distribution of ratings across all reviews
     *
     * @return array An array containing the count for each rating (1-5)
     */
    public function getRatingDistribution(): array
    {
        $distribution = [];
        
        for ($i = 1; $i <= 5; $i++) {
            $distribution[$i] = $this->countByRating($i);
        }
        
        return $distribution;
    }
} 