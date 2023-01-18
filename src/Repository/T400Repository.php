<?php

namespace App\Repository;

use App\Entity\T001;
use App\Entity\T012;
use App\Entity\T030;
use App\Entity\T052;
use App\Entity\T100;
use App\Entity\T110;
use App\Entity\T120;
use App\Entity\T200;
use App\Entity\T320;
use App\Entity\T400;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Query\Expr\Join;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<T400>
 *
 * @method T400|null find($id, $lockMode = null, $lockVersion = null)
 * @method T400|null findOneBy(array $criteria, array $orderBy = null)
 * @method T400[]    findAll()
 * @method T400[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class T400Repository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, T400::class);
    }

    public function save(T400 $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(T400 $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }


    /**
     * @param string $artnr
     * @param ArrayCollection $dlnr
     * @return array
     */
    public function findByVehicle(string $artnr, ArrayCollection $dlnr): array
    {
        return $this->createQueryBuilder('t')
            ->distinct()
            ->select(
                't001.marke',
                't200.artnr',
                't320.genartnr',
                't030.bez as famille',
                't120.ktypnr as ktypnr',
                'marke.bez as marque',
                'model.bez as modele',
                'vehicul.bez as vehicule',
                't110.bjvon as annee_debut',
                't110.bjbis as annee_fin',
                'carburan.bez as carburant',
            )
            ->join(T200::class, 't200', Join::WITH, 't.artnr = t200.artnr')
            ->join(T001::class, 't001', Join::WITH, 't.dlnr = t001.dlnr')
            ->from(T320::class, 't320')
            ->from(T030::class, 't030')
            ->from(T030::class, 'carburan')
            ->from(T012::class, 'marke')
            ->from(T100::class, 't100')
            ->from(T012::class, 'model')
            ->from(T110::class, 't110')
            ->from(T012::class, 'vehicul')
            ->from(T120::class, 't120')
            ->from(T052::class, 't052')
            ->where('t030.beznr = t320.beznr')
            ->andWhere('t320.genartnr = t.genartnr')
            ->andWhere('t120.ktypnr = t.vknzielnr')
            ->andWhere('t120.kmodnr = t110.kmodnr')
            ->andWhere('t110.hernr = t100.hernr')
            ->andWhere('t100.lbeznr = marke.lbeznr')
            ->andWhere('t110.lbeznr = model.lbeznr')
            ->andWhere('t120.lbeznr = vehicul.lbeznr')
            ->andWhere("marke.sprachnr = '006'")
            ->andWhere("model.sprachnr = '006'")
            ->andWhere("vehicul.sprachnr = '006'")
            ->andWhere("carburan.sprachnr = '006'")
            ->andWhere("t052.tabnr = '182'")
            ->andWhere("marke.lkz = ''")
            ->andWhere("model.lkz = ''")
            ->andWhere("vehicul.lkz = ''")
            ->andWhere('t120.krstoffart = t052.key')
            ->andWhere('t052.beznr = carburan.beznr')
            ->andWhere("t.dlnr IN (:dlnr)")
            ->andWhere("t.artnr IN (:artnr)")
            ->andWhere("t030.sprachnr = '006'")
            ->setParameter('artnr', $artnr)
            ->setParameter('dlnr', $dlnr)
            ->getQuery()
            ->execute();
    }

   /**
//     * @return T400[] Returns an array of T400 objects
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

//    public function findOneBySomeField($value): ?T400
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
