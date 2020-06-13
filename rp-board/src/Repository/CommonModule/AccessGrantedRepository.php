<?php

namespace App\Repository\CommonModule;

use App\Entity\CommonModule\AccessGranted;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method AccessGranted|null find($id, $lockMode = null, $lockVersion = null)
 * @method AccessGranted|null findOneBy(array $criteria, array $orderBy = null)
 * @method AccessGranted[]    findAll()
 * @method AccessGranted[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AccessGrantedRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AccessGranted::class);
    }

    // /**
    //  * @return AccessGranted[] Returns an array of AccessGranted objects
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
    public function findOneBySomeField($value): ?AccessGranted
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
