<?php

namespace App\Repository;

use App\Entity\Films;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\Query\ResultSetMapping;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Films|null find($id, $lockMode = null, $lockVersion = null)
 * @method Films|null findOneBy(array $criteria, array $orderBy = null)
 * @method Films[]    findAll()
 * @method Films[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FilmsRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Films::class);
    }

    public function searchBy($publicAge, $yearOfProds, $types, $actors, $directors)
    {
        $qb = $this->createQueryBuilder('f');

        if (!$directors->isEmpty()) {
            $qb
                ->leftJoin('f.directors','d')
                ->andWhere('d.id IN (:directors)')
                ->setParameter('directors', $directors);
        }

        if (!$actors->isEmpty()) {
            $qb
                ->leftJoin('f.actors','a')
                ->andWhere('a.id IN (:actors)')
                ->setParameter('actors', $actors);
        }
        if (!$types->isEmpty()) {
            $qb
                ->leftJoin('f.types','tf')
                ->andWhere('tf.id IN (:types)')
                ->setParameter('types', $types);
        }
        if (!$yearOfProds->isEmpty()) {
            $qb
                ->andWhere('f.yearOfProduction IN (:yearOfProduction)')
                ->setParameter('yearOfProduction', $yearOfProds);
        }
        if (!$publicAge->isEmpty()) {
            $qb
                ->andWhere('f.publicAge IN (:publicAge)')
                ->setParameter('publicAge', $publicAge);
        }

        return $qb->getQuery()->getResult();
    }

    public function getLike($input)
    {
        $input = "%" . $input . "%";
        $qb = $this->createQueryBuilder('f')
            ->select('f.title','f.id','f.originalTitle','p.image','pa.label')
            ->join('f.picture','p')
            ->join('f.publicAge','pa')
            ->where('f.title LIKE :title')
            ->setParameter('title',$input)
            ->orWhere('f.originalTitle LIKE :originalTitle')
            ->setParameter('originalTitle',$input)
            ->getQuery();
        return $qb->getResult();
    }

    public function randFilm()
    {
        $rsm = new ResultSetMapping();
        $rsm->addEntityResult('App\Entity\Films', 'f');
        $rsm->addFieldResult('f', 'id', 'id');
        $sql = 'SELECT * FROM films ORDER BY RAND() LIMIT 8';
        $query = $this->_em->createNativeQuery($sql, $rsm);
        return $query->getResult();
    }

}
