<?php

namespace App\Repository;

use App\Entity\T001;
use App\Entity\T030;
use App\Entity\T211;
use App\Entity\T320;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\Query\Expr\Join;
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
    public function findByQuery(string|null $query): array
    {


        if (gettype($query) === "NULL") {
            return $this->findAll();
        }

        $query = strtoupper($query);

        return $this->createQueryBuilder('t')
            ->select('t.marke', 't.dlnr', 't.khernr')
            ->andWhere('t.marke LIKE :query')
            ->setParameter('query', '%' . $query . '%')
            ->orderBy('t.marke', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * @param mixed $dlnr
     * @param mixed $designationLanguage
     * @return array
     */
    public function findByGenartnr(mixed $dlnr, mixed $designationLanguage): array
    {
        return $this->createQueryBuilder('t001')
            ->distinct()
            ->innerJoin(T211::class, 't211', Join::WITH, 't211.dlnr = t001.dlnr')
            ->innerJoin(T320::class, 't320', Join::WITH, 't320.genartnr = t211.genartnr')
            ->innerJoin(T030::class, 't030', Join::WITH, 't030.beznr = t320.beznr')
            ->select('t001.marke', 't211.dlnr', 't320.genartnr', 't030.bez', 't030.sprachnr')
            ->where('t211.dlnr IN (:dlnr)')
            ->andWhere('t030.sprachnr in (:sprachnr)')
            ->setParameter('dlnr', $dlnr)
            ->setParameter('sprachnr', $designationLanguage)
            ->orderBy('t030.sprachnr', 'ASC')
            ->getQuery()
            ->execute();

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
