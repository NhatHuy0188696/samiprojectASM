<?php

namespace App\Repository;

use App\Entity\Hotro;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Hotro|null find($id, $lockMode = null, $lockVersion = null)
 * @method Hotro|null findOneBy(array $criteria, array $orderBy = null)
 * @method Hotro[]    findAll()
 * @method Hotro[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class HotroRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Hotro::class);
    }

    // /**
    //  * @return Hotro[] Returns an array of Hotro objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('h')
            ->andWhere('h.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('h.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Hotro
    {
        return $this->createQueryBuilder('h')
            ->andWhere('h.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
