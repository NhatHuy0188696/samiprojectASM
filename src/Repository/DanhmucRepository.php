<?php

namespace App\Repository;

use App\Entity\Danhmuc;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Danhmuc|null find($id, $lockMode = null, $lockVersion = null)
 * @method Danhmuc|null findOneBy(array $criteria, array $orderBy = null)
 * @method Danhmuc[]    findAll()
 * @method Danhmuc[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DanhmucRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Danhmuc::class);
    }

    // /**
    //  * @return Danhmuc[] Returns an array of Danhmuc objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('d.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Danhmuc
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
