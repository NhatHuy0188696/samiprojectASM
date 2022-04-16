<?php

namespace App\Repository;

use App\Entity\Nguoidung;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Nguoidung|null find($id, $lockMode = null, $lockVersion = null)
 * @method Nguoidung|null findOneBy(array $criteria, array $orderBy = null)
 * @method Nguoidung[]    findAll()
 * @method Nguoidung[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class NguoidungRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Nguoidung::class);
    }

    // /**
    //  * @return Nguoidung[] Returns an array of Nguoidung objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('n.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Nguoidung
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
