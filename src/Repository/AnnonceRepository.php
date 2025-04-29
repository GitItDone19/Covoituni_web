<?php

namespace App\Repository;

use App\Entity\Annonce;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Annonce>
 *
 * @method Annonce|null find($id, $lockMode = null, $lockVersion = null)
 * @method Annonce|null findOneBy(array $criteria, array $orderBy = null)
 * @method Annonce[]    findAll()
 * @method Annonce[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AnnonceRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Annonce::class);
    }

    /**
     * @return Annonce[] Returns an array of latest open announcements
     */
    public function findLatestOpen(int $limit = 5): array
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.status = :status')
            ->setParameter('status', 'ouvert')
            ->orderBy('a.date_publication', 'DESC')
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }

    /**
     * @return Annonce[] Returns an array of Annonce objects for a specific driver
     */
    public function findByDriver(int $driverId): array
    {
        return $this->createQueryBuilder('a')
            ->join('a.trajet', 't')
            ->where('a.driver_id = :user')
            ->setParameter('user', $driverId)
            ->orderBy('a.departureDate', 'DESC')
            ->getQuery()
            ->getResult();
    }
    
    /**
     * @return Annonce[] Returns an array of active Annonce objects
     */
    public function findActiveAnnouncements(): array
    {
        return $this->createQueryBuilder('a')
            ->join('a.trajet', 't')
            ->andWhere('a.status = :status')
            ->andWhere('a.departureDate > :now')
            ->setParameter('status', 'ouvert')
            ->setParameter('now', new \DateTime())
            ->orderBy('a.departureDate', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Find the most recent announcements
     * 
     * @param int $limit The maximum number of announcements to return
     * @return Annonce[] The most recent announcements
     */
    public function findRecent(int $limit = 5): array
    {
        try {
            return $this->createQueryBuilder('a')
                ->orderBy('a.date_publication', 'DESC')
                ->setMaxResults($limit)
                ->getQuery()
                ->getResult();
        } catch (\Exception $e) {
            return [];
        }
    }

    /**
     * Count announcements by status
     * 
     * @param string $status The status to count
     * @return int The number of announcements with the given status
     */
    public function countByStatus(string $status): int
    {
        try {
            return $this->createQueryBuilder('a')
                ->select('COUNT(a.id)')
                ->where('a.status = :status')
                ->setParameter('status', $status)
                ->getQuery()
                ->getSingleScalarResult();
        } catch (\Exception $e) {
            return 0;
        }
    }

    /**
     * Count announcements created today
     * 
     * @return int The number of announcements created today
     */
    public function countCreatedToday(): int
    {
        $today = new \DateTime('today');
        $tomorrow = new \DateTime('tomorrow');
        
        try {
            return $this->createQueryBuilder('a')
                ->select('COUNT(a.id)')
                ->where('a.date_publication >= :today')
                ->andWhere('a.date_publication < :tomorrow')
                ->setParameter('today', $today)
                ->setParameter('tomorrow', $tomorrow)
                ->getQuery()
                ->getSingleScalarResult();
        } catch (\Exception $e) {
            return 0;
        }
    }

    /**
     * @return Annonce[] Returns an array of Annonce objects for a specific driver with filters
     */
    public function findByDriverWithFilters(int $driverId, ?string $search = null, ?string $status = null, ?string $sort = null): array
    {
        $qb = $this->createQueryBuilder('a')
            ->join('a.trajet', 't')
            ->where('a.driver_id = :user')
            ->setParameter('user', $driverId);
            
        // Filtre par titre d'annonce ou de trajet si une recherche est spécifiée
        if ($search && !empty($search)) {
            $qb->andWhere('a.titre LIKE :search OR t.titre LIKE :search')
               ->setParameter('search', '%' . $search . '%');
        }
        
        // Filtre par statut d'annonce si un statut est spécifié
        if ($status && !empty($status)) {
            $qb->andWhere('a.status = :status')
               ->setParameter('status', $status);
        }
        
        // Tri des résultats
        switch ($sort) {
            case 'recent':
                $qb->orderBy('a.date_publication', 'DESC');
                break;
            case 'ancien':
                $qb->orderBy('a.date_publication', 'ASC');
                break;
            case 'prix-asc':
                $qb->orderBy('t.price', 'ASC');
                break;
            case 'prix-desc':
                $qb->orderBy('t.price', 'DESC');
                break;
            default:
                $qb->orderBy('a.departureDate', 'DESC');
                break;
        }
        
        return $qb->getQuery()->getResult();
    }

    /**
     * @return Annonce[] Returns an array of Annonce objects filtered by search, status and sorting
     */
    public function findWithFilters(?string $search = null, ?string $status = null, ?string $sort = null, ?string $location = null): array
    {
        $qb = $this->createQueryBuilder('a')
            ->join('a.trajet', 't');
            
        // Filtrer les annonces actives par défaut (date de départ future)
        $qb->andWhere('a.departureDate > :now')
           ->setParameter('now', new \DateTime());
        
        // Filtre par titre d'annonce ou de trajet si une recherche est spécifiée
        if ($search && !empty($search)) {
            $qb->andWhere('a.titre LIKE :search OR t.titre LIKE :search 
                           OR t.departurePoint LIKE :search OR t.arrivalPoint LIKE :search')
               ->setParameter('search', '%' . $search . '%');
        }
        
        // Filtre par localisation si spécifiée
        if ($location && !empty($location)) {
            $qb->andWhere('t.departurePoint LIKE :location')
               ->setParameter('location', '%' . $location . '%');
        }
        
        // Filtre par statut d'annonce si un statut est spécifié
        if ($status && !empty($status)) {
            $qb->andWhere('a.status = :status')
               ->setParameter('status', $status);
        } else {
            // Par défaut, afficher uniquement les annonces ouvertes ou pleines
            $qb->andWhere('a.status IN (:statuses)')
               ->setParameter('statuses', ['ouvert', 'plein']);
        }
        
        // Tri des résultats
        switch ($sort) {
            case 'recent':
                $qb->orderBy('a.date_publication', 'DESC');
                break;
            case 'ancien':
                $qb->orderBy('a.date_publication', 'ASC');
                break;
            case 'prix-asc':
                $qb->orderBy('t.price', 'ASC');
                break;
            case 'prix-desc':
                $qb->orderBy('t.price', 'DESC');
                break;
            default:
                $qb->orderBy('a.departureDate', 'ASC');
                break;
        }
        
        return $qb->getQuery()->getResult();
    }

    /**
     * @return Annonce[] Returns an array of Annonce objects filtered for admin interface
     */
    public function findAdminWithFilters(?string $search = null, ?string $status = null, ?string $sort = null): array
    {
        $qb = $this->createQueryBuilder('a')
            ->join('a.trajet', 't');
            
        // Filtre par titre d'annonce, trajet, point de départ ou d'arrivée si une recherche est spécifiée
        if ($search && !empty($search)) {
            $qb->andWhere('a.titre LIKE :search OR t.titre LIKE :search 
                          OR t.departurePoint LIKE :search OR t.arrivalPoint LIKE :search')
               ->setParameter('search', '%' . $search . '%');
        }
        
        // Filtre par statut d'annonce si un statut est spécifié
        if ($status && !empty($status)) {
            $qb->andWhere('a.status = :status')
               ->setParameter('status', $status);
        }
        
        // Tri des résultats
        switch ($sort) {
            case 'recent':
                $qb->orderBy('a.date_publication', 'DESC');
                break;
            case 'ancien':
                $qb->orderBy('a.date_publication', 'ASC');
                break;
            case 'depart':
                $qb->orderBy('a.departureDate', 'ASC');
                break;
            case 'prix-asc':
                $qb->orderBy('t.price', 'ASC');
                break;
            case 'prix-desc':
                $qb->orderBy('t.price', 'DESC');
                break;
            default:
                $qb->orderBy('a.id', 'DESC');
                break;
        }
        
        return $qb->getQuery()->getResult();
    }
} 