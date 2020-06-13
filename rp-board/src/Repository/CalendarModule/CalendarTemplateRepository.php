<?php

namespace App\Repository\CalendarModule;

use App\Entity\CalendarModule\CalendarTemplate;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CalendarTemplate|null find($id, $lockMode = null, $lockVersion = null)
 * @method CalendarTemplate|null findOneBy(array $criteria, array $orderBy = null)
 * @method CalendarTemplate[]    findAll()
 * @method CalendarTemplate[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CalendarTemplateRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CalendarTemplate::class);
    }

    // /**
    //  * @return CalendarTemplate[] Returns an array of CalendarTemplate objects
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
    public function findOneBySomeField($value): ?CalendarTemplate
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
