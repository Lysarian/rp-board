<?php

namespace App\Repository\CommonModule;

use App\Entity\CommonModule\PartyHasFaction;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method PartyHasFaction|null find($id, $lockMode = null, $lockVersion = null)
 * @method PartyHasFaction|null findOneBy(array $criteria, array $orderBy = null)
 * @method PartyHasFaction[]    findAll()
 * @method PartyHasFaction[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PartyHasFactionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PartyHasFaction::class);
    }

    // /**
    //  * @return PartyHasFaction[] Returns an array of PartyHasFaction objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?PartyHasFaction
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
