<?php

namespace App\Repository\CommonModule;

use App\Entity\CommonModule\AvatarHasCategory;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method AvatarHasCategory|null find($id, $lockMode = null, $lockVersion = null)
 * @method AvatarHasCategory|null findOneBy(array $criteria, array $orderBy = null)
 * @method AvatarHasCategory[]    findAll()
 * @method AvatarHasCategory[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AvatarHasCategoryRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AvatarHasCategory::class);
    }

    // /**
    //  * @return AvatarHasCategory[] Returns an array of AvatarHasCategory objects
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
    public function findOneBySomeField($value): ?AvatarHasCategory
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
