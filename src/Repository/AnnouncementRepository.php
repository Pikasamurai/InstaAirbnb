<?php

namespace App\Repository;

use App\Entity\Announcement;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Announcement|null find($id, $lockMode = null, $lockVersion = null)
 * @method Announcement|null findOneBy(array $criteria, array $orderBy = null)
 * @method Announcement[]    findAll()
 * @method Announcement[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AnnouncementRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Announcement::class);
    }

    // /**
    //  * @return Announcement[] Returns an array of Announcement objects
    //  */
    public function findTableau($limit): array
    {
        return $this->createQueryBuilder('announcement')
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }
    public function findTableauEnt(): array
    {
        return $this->createQueryBuilder('announcement')
            ->getQuery()
            ->getResult();
    }
}
