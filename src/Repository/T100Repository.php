<?php

namespace App\Repository;

use App\Entity\T100;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<T100>
 *
 * @method T100|null find($id, $lockMode = null, $lockVersion = null)
 * @method T100|null findOneBy(array $criteria, array $orderBy = null)
 * @method T100[]    findAll()
 * @method T100[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class T100Repository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, T100::class);
    }

    public function save(T100 $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(T100 $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    /**
     * @return T100[] Returns an array of T100 objects
     */
    public function findByQuery(string | null  $query): array
    {


        if(gettype($query) === "NULL") {
            return $this->findAll();
        }

        $query = strtoupper($query);

        return $this->createQueryBuilder('t')
            ->select('t.hernr','t.hkz')
            ->andWhere('t.hkz LIKE :query')
            ->setParameter('query','%'.$query.'%')
            ->orderBy('t.hkz', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
            ;
    }

//    public function findOneBySomeField($value): ?T100
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
