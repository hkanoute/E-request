<?php

namespace App\Repository;

use App\Entity\SupplierGenartnr;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<SupplierGenartnr>
 *
 * @method SupplierGenartnr|null find($id, $lockMode = null, $lockVersion = null)
 * @method SupplierGenartnr|null findOneBy(array $criteria, array $orderBy = null)
 * @method SupplierGenartnr[]    findAll()
 * @method SupplierGenartnr[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SupplierGenartnrRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SupplierGenartnr::class);
    }

    public function save(SupplierGenartnr $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(SupplierGenartnr $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return SupplierGenartnr[] Returns an array of SupplierGenartnr objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('s')
//            ->andWhere('s.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('s.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?SupplierGenartnr
//    {
//        return $this->createQueryBuilder('s')
//            ->andWhere('s.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
