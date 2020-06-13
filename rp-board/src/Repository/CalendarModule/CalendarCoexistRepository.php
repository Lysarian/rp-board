<?php

namespace App\Repository\CalendarModule;

use App\Entity\CalendarModule\CalendarCoexist;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CalendarCoexist|null find($id, $lockMode = null, $lockVersion = null)
 * @method CalendarCoexist|null findOneBy(array $criteria, array $orderBy = null)
 * @method CalendarCoexist[]    findAll()
 * @method CalendarCoexist[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CalendarCoexistRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CalendarCoexist::class);
    }

    // /**
    //  * @return CalendarCoexist[] Returns an array of CalendarCoexist objects
    //  */
    /*
    public function findByExampleField($value)
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
    public function findOneBySomeField($value): ?CalendarCoexist
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
