<?php

namespace App\Repository;

use App\Entity\T001;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<T001>
 *
 * @method T001|null find($id, $lockMode = null, $lockVersion = null)
 * @method T001|null findOneBy(array $criteria, array $orderBy = null)
 * @method T001[]    findAll()
 * @method T001[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class T001Repository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, T001::class);
    }

    public function save(T001 $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(T001 $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    /**
     * @return T001[] Returns an array of T001 objects
    */
    public function findByQuery(string | null  $query): array
    {


        if(gettype($query) === "NULL") {
            return $this->findAll();
        }

        $query = strtoupper($query);

        return $this->createQueryBuilder('t')
            ->select('t.marke','t.dlnr','t.khernr')
            ->andWhere('t.marke LIKE :query')
            ->setParameter('query','%'.$query.'%')
            ->orderBy('t.marke', 'ASC')
            ->getQuery()
            ->getResult()

        ;
    }

    /**
     * @return [] Returns an array of T001 objects
     */
    public function findByGenartnr(string | null  $query): array
    {

        $query = strtoupper($query);

        return $this->createQueryBuilder('t')
            ->distinct(true)
            ->from('App:T211','t211')
            ->from('App:T320', 't320')
            ->from('App:T030', 't030')
            ->select('t.marke','t.dlnr','t320.genartr', '')
            ->andWhere('t.marke LIKE :query')
            ->setParameter('query','%'.$query.'%')
            ->orderBy('t.marke', 'ASC')
            ->getQuery()
            ->getResult()
            ;
    }

//    public function findOneBySomeField($value): ?T001
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
