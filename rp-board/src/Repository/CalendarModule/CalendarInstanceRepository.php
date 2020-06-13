<?php

namespace App\Repository\CalendarModule;

use App\Entity\CalendarModule\CalendarInstance;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CalentdarInstance|null find($id, $lockMode = null, $lockVersion = null)
 * @method CalentdarInstance|null findOneBy(array $criteria, array $orderBy = null)
 * @method CalentdarInstance[]    findAll()
 * @method CalentdarInstance[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CalentdarInstanceRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CalendarInstance::class);
    }

    // /**
    //  * @return CalentdarInstance[] Returns an array of CalentdarInstance objects
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
    public function findOneBySomeField($value): ?CalentdarInstance
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
