<?php

namespace App\Repository\CommonModule;

use App\Entity\CommonModule\PartyHasCategory;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method PartyHasCategory|null find($id, $lockMode = null, $lockVersion = null)
 * @method PartyHasCategory|null findOneBy(array $criteria, array $orderBy = null)
 * @method PartyHasCategory[]    findAll()
 * @method PartyHasCategory[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PartyHasCategoryRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PartyHasCategory::class);
    }

    // /**
    //  * @return PartyHasCategory[] Returns an array of PartyHasCategory objects
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
    public function findOneBySomeField($value): ?PartyHasCategory
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
