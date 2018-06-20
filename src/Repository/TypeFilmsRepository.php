<?php

namespace App\Repository;

use App\Entity\TypeFilms;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method TypeFilms|null find($id, $lockMode = null, $lockVersion = null)
 * @method TypeFilms|null findOneBy(array $criteria, array $orderBy = null)
 * @method TypeFilms[]    findAll()
 * @method TypeFilms[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TypeFilmsRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, TypeFilms::class);
    }

//    /**
//     * @return TypeFilms[] Returns an array of TypeFilms objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?TypeFilms
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
