<?php

namespace App\Repository;

use App\Entity\Srodbase;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Srodbase|null find($id, $lockMode = null, $lockVersion = null)
 * @method Srodbase|null findOneBy(array $criteria, array $orderBy = null)
 * @method Srodbase[]    findAll()
 * @method Srodbase[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SrodbaseRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Srodbase::class);
    }

    // /**
    //  * @return Srodbase[] Returns an array of Srodbase objects
    //  */
    /*
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
    */

    /*
    public function findOneBySomeField($value): ?Srodbase
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
