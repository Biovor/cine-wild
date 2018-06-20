<?php

namespace App\Repository;

use App\Entity\PublicAge;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method PublicAge|null find($id, $lockMode = null, $lockVersion = null)
 * @method PublicAge|null findOneBy(array $criteria, array $orderBy = null)
 * @method PublicAge[]    findAll()
 * @method PublicAge[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PublicAgeRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, PublicAge::class);
    }

//    /**
//     * @return PublicAge[] Returns an array of PublicAge objects
//     */
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
    public function findOneBySomeField($value): ?PublicAge
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
