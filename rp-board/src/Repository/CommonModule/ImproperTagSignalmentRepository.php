<?php

namespace App\Repository\CommonModule;

use App\Entity\CommonModule\ImproperTagSignalment;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ImproperTagSignalment|null find($id, $lockMode = null, $lockVersion = null)
 * @method ImproperTagSignalment|null findOneBy(array $criteria, array $orderBy = null)
 * @method ImproperTagSignalment[]    findAll()
 * @method ImproperTagSignalment[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ImproperTagSignalmentRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ImproperTagSignalment::class);
    }

    // /**
    //  * @return ImproperTagSignalment[] Returns an array of ImproperTagSignalment objects
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
    public function findOneBySomeField($value): ?ImproperTagSignalment
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
