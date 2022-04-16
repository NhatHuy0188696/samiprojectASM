<?php

namespace App\Repository;

use App\Entity\Sanpham;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use phpDocumentor\Reflection\Types\Boolean;

/**
 * @method Sanpham|null find($id, $lockMode = null, $lockVersion = null)
 * @method Sanpham|null findOneBy(array $criteria, array $orderBy = null)
 * @method Sanpham[]    findAll()
 * @method Sanpham[]    findAllSanpham()
 * @method Sanpham[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SanphamRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Sanpham::class);
    }

     /**
     * @return Sanpham[] Returns an array of Sanpham objects
     */
    
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    
    public function findOneBySomeField($value): ?Sanpham
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
   /**
     * @return Product[]
     */
    public function findAllGreaterThanPrice(int $price): array
    {
        $entityManager = $this->getEntityManager();

        $query = $entityManager->createQuery(
            'SELECT p
            FROM App\Entity\Product p
            WHERE p.price > :price
            ORDER BY p.price ASC'
        )->setParameter('price', $price);

        // returns an array of Product objects
        return $query->getResult();
    }
}
