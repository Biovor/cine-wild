<?php

namespace App\Repository;

use App\Entity\YearOfProduction;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method YearOfProduction|null find($id, $lockMode = null, $lockVersion = null)
 * @method YearOfProduction|null findOneBy(array $criteria, array $orderBy = null)
 * @method YearOfProduction[]    findAll()
 * @method YearOfProduction[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class YearOfProductionRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, YearOfProduction::class);
    }

//    /**
//     * @return YearOfProduction[] Returns an array of YearOfProduction objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('y')
            ->andWhere('y.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('y.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?YearOfProduction
    {
        return $this->createQueryBuilder('y')
            ->andWhere('y.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
