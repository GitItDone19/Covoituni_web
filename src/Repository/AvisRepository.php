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

    public function save(Avis $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Avis $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }
<<<<<<< Updated upstream
=======
    
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
    
    /**
     * Check if a passenger has already submitted a review for a specific driver
     *
     * @param int $passengerId The ID of the passenger
     * @param int $driverId The ID of the driver
     * @return bool True if a review already exists, false otherwise
     */
    public function hasReviewForDriver(int $passengerId, int $driverId): bool
    {
        try {
            $count = $this->createQueryBuilder('a')
                ->select('COUNT(a.id)')
                ->where('a.passager = :passengerId')
                ->andWhere('a.conducteur = :driverId')
                ->setParameter('passengerId', $passengerId)
                ->setParameter('driverId', $driverId)
                ->getQuery()
                ->getSingleScalarResult();
                
            return $count > 0;
        } catch (\Exception $e) {
            return false;
        }
    }
>>>>>>> Stashed changes
} 