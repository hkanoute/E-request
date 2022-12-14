<?php

namespace App\Repository;

use App\Entity\T020;
use App\Entity\T030;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\Query\Expr\Join;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<T020>
 *
 * @method T020|null find($id, $lockMode = null, $lockVersion = null)
 * @method T020|null findOneBy(array $criteria, array $orderBy = null)
 * @method T020[]    findAll()
 * @method T020[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class T020Repository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, T020::class);
    }

    public function save(T020 $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(T020 $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function getBez()
    {
        return $this->createQueryBuilder('t020')
            ->innerJoin(T030::class, 't030', Join::WITH, 't030.beznr = t020.beznr')
            ->where("t030.sprachnr ='006'")
            ->select('t030.bez')
            ->getQuery()
            ->execute();
    }

    public function getDesignation( mixed $designation) {
        return $this->createQueryBuilder('t020')
            ->innerJoin(T030::class, 't030', Join::WITH, 't030.beznr = t020.beznr')
            ->where("t030.bez in (:designation)")
            ->select('t020.sprachnr', 't030.bez')
            ->setParameter('designation', $designation)
            ->getQuery()
            ->execute();
    }

//    /**
//     * @return T020[] Returns an array of T020 objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('t.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?T020
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
