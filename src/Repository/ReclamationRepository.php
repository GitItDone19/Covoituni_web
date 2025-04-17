<?php

namespace App\Repository;

use App\Entity\Reclamation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\Tools\Pagination\Paginator;

class ReclamationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Reclamation::class);
    }
    
    /**
     * Find reclamations by various filters with pagination
     * 
     * @param array $filters Associative array of filters
     * @param int $page Page number (starting from 1)
     * @param int $limit Number of records per page
     * @return array Array with 'data' and 'pagination' keys
     */
    public function findByFilters(array $filters = [], int $page = 1, int $limit = 10): array
    {
        $qb = $this->createQueryBuilder('r')
                   ->leftJoin('r.user', 'u')
                   ->addSelect('u');
        
        // Apply filters
        if (!empty($filters['status'])) {
            $qb->andWhere('r.status = :status')
               ->setParameter('status', $filters['status']);
        }
        
        if (!empty($filters['user_id'])) {
            $qb->andWhere('r.user = :user_id')
               ->setParameter('user_id', $filters['user_id']);
        }
        
        // Order by date (newest first)
        $qb->orderBy('r.date', 'DESC');
        
        // Apply pagination
        $firstResult = ($page - 1) * $limit;
        $qb->setFirstResult($firstResult)
           ->setMaxResults($limit);
        
        // Create paginator
        $paginator = new Paginator($qb);
        $total = count($paginator);
        
        // Convert paginator to array without using getArrayCopy()
        $results = [];
        foreach ($paginator as $item) {
            $results[] = $item;
        }
        
        return [
            'data' => $results,
            'pagination' => [
                'current_page' => $page,
                'total_items' => $total,
                'items_per_page' => $limit,
                'total_pages' => ceil($total / $limit)
            ]
        ];
    }
    
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
    
    /**
     * Get reclamation statistics
     * 
     * @return array Statistical data about reclamations
     */
    public function getReclamationStats(): array
    {
        $stats = [
            'pending' => $this->countByStatus('pending'),
            'in_progress' => $this->countByStatus('in_progress'),
            'resolved' => $this->countByStatus('resolved'),
            'rejected' => $this->countByStatus('rejected'),
            'total' => $this->count([]),
            'recent' => []
        ];
        
        // Get recent reclamations (last 5)
        $recentReclamations = $this->findBy([], ['date' => 'DESC'], 5);
        foreach ($recentReclamations as $reclamation) {
            $stats['recent'][] = [
                'id' => $reclamation->getId(),
                'subject' => $reclamation->getSubject(),
                'status' => $reclamation->getStatus(),
                'date' => $reclamation->getDate()->format('Y-m-d H:i:s')
            ];
        }
        
        return $stats;
    }
} 