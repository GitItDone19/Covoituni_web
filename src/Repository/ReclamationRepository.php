<?php

namespace App\Repository;

use App\Entity\Reclamation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class ReclamationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Reclamation::class);
    }
    
    // Add custom query methods here if needed
    
    /**
     * Count reclamations by status
     * 
     * @param array|string $status Status or array of statuses to count
     * @return int Number of reclamations with the given status(es)
     */
    public function countByStatus($status): int
    {
        $qb = $this->createQueryBuilder('r');
        
        if (is_array($status)) {
            $qb->where('r.status IN (:statuses)')
               ->setParameter('statuses', $status);
        } else {
            $qb->where('r.status = :status')
               ->setParameter('status', $status);
        }
        
        return $qb->select('COUNT(r.id)')
                 ->getQuery()
                 ->getSingleScalarResult();
    }
} 