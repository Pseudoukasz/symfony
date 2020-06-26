<?php

namespace App\Repository;

use App\Entity\Categoryy;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Categoryy|null find($id, $lockMode = null, $lockVersion = null)
 * @method Categoryy|null findOneBy(array $criteria, array $orderBy = null)
 * @method Categoryy[]    findAll()
 * @method Categoryy[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CategoryyRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Categoryy::class);
    }

    // /**
    //  * @return Categoryy[] Returns an array of Categoryy objects
    //  */
    /* 
    public function findByExampleField(int $id)
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
    public function findOneBySomeField($value): ?Categoryy
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
