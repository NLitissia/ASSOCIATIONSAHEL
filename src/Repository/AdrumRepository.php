<?php

namespace App\Repository;

use App\Entity\Adrum;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Adrum|null find($id, $lockMode = null, $lockVersion = null)
 * @method Adrum|null findOneBy(array $criteria, array $orderBy = null)
 * @method Adrum[]    findAll()
 * @method Adrum[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AdrumRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Adrum::class);
    }

    // /**
    //  * @return Adrum[] Returns an array of Adrum objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Adrum
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
