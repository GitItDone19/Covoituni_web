<?php

namespace App\Repository;

use App\Entity\Reservation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Reservation>
 *
 * @method Reservation|null find($id, $lockMode = null, $lockVersion = null)
 * @method Reservation|null findOneBy(array $criteria, array $orderBy = null)
 * @method Reservation[]    findAll()
 * @method Reservation[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ReservationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Reservation::class);
    }

    /**
     * Trouver les réservations par utilisateur
     */
    public function findByUser(int $userId): array
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.userId = :userId')
            ->setParameter('userId', $userId)
            ->orderBy('r.dateReservation', 'DESC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Trouver les réservations par annonce
     */
    public function findByAnnonce(int $annonceId): array
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.annonce = :annonceId')
            ->setParameter('annonceId', $annonceId)
            ->orderBy('r.dateReservation', 'DESC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Trouver les réservations en attente pour un conducteur
     */
    public function findPendingByDriver(int $driverId): array
    {
        return $this->createQueryBuilder('r')
            ->join('r.annonce', 'a')
            ->andWhere('a.driver_id = :driverId')
            ->andWhere('r.status = :status')
            ->setParameter('driverId', $driverId)
            ->setParameter('status', 'PENDING')
            ->orderBy('r.dateReservation', 'ASC')
            ->getQuery()
            ->getResult();
    }
} 