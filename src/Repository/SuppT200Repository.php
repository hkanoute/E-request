<?php

namespace App\Repository;

use App\Entity\Img360;
use App\Entity\SupplierImage;
use App\Entity\SuppT200;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<SuppT200>
 *
 * @method SuppT200|null find($id, $lockMode = null, $lockVersion = null)
 * @method SuppT200|null findOneBy(array $criteria, array $orderBy = null)
 * @method SuppT200[]    findAll()
 * @method SuppT200[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SuppT200Repository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SuppT200::class);
    }

    public function save(SuppT200 $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(SuppT200 $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function getImagesByArtnr(string $artnr): array
    {
        return $this->createQueryBuilder('t200')
            ->select('t200.artnr as reference', 'supplierImage.image as visual_fixe', 'img360.img360_url as visual_360')
            ->leftJoin(Img360::class, 'img360', 'WITH', 't200.artnr = img360.prod_idint')
            ->leftJoin(SupplierImage::class, 'supplierImage', 'WITH', 't200.artnr = supplierImage.artnr')
            ->where('t200.artnr = :artnr')
            ->setParameter('artnr', $artnr)
            ->distinct()
            ->getQuery()
            ->getResult();
    }

//    /**
//     * @return SuppT200[] Returns an array of SuppT200 objects
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

//    public function findOneBySomeField($value): ?SuppT200
//    {
//        return $this->createQueryBuilder('s')
//            ->andWhere('s.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
