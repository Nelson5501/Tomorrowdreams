<?php

namespace App\Repository;

use App\Entity\Easyadmin;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Easyadmin|null find($id, $lockMode = null, $lockVersion = null)
 * @method Easyadmin|null findOneBy(array $criteria, array $orderBy = null)
 * @method Easyadmin[]    findAll()
 * @method Easyadmin[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EasyadminRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Easyadmin::class);
    }

    // /**
    //  * @return Easyadmin[] Returns an array of Easyadmin objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('e.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Easyadmin
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
