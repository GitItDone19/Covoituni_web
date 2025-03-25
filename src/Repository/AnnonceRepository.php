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
} 