<?php

namespace App\Repository;

use App\Entity\Chitiethoadon;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Chitiethoadon|null find($id, $lockMode = null, $lockVersion = null)
 * @method Chitiethoadon|null findOneBy(array $criteria, array $orderBy = null)
 * @method Chitiethoadon[]    findAll()
 * @method Chitiethoadon[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ChitiethoadonRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Chitiethoadon::class);
    }

    // /**
    //  * @return Chitiethoadon[] Returns an array of Chitiethoadon objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Chitiethoadon
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
