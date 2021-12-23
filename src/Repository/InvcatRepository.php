<?php

namespace App\Repository;

use App\Entity\Invcat;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Invcat|null find($id, $lockMode = null, $lockVersion = null)
 * @method Invcat|null findOneBy(array $criteria, array $orderBy = null)
 * @method Invcat[]    findAll()
 * @method Invcat[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class InvcatRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Invcat::class);
    }

    // /**
    //  * @return Invcat[] Returns an array of Invcat objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('i.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Invcat
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
