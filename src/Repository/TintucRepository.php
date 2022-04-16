<?php

namespace App\Repository;

use App\Entity\Tintuc;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Tintuc|null find($id, $lockMode = null, $lockVersion = null)
 * @method Tintuc|null findOneBy(array $criteria, array $orderBy = null)
 * @method Tintuc[]    findAll()
 * @method Tintuc[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TintucRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Tintuc::class);
    }

    // /**
    //  * @return Tintuc[] Returns an array of Tintuc objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Tintuc
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
