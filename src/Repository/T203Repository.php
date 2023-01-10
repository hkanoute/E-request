<?php

namespace App\Repository;

use App\Entity\T001;
use App\Entity\T012;
use App\Entity\T030;
use App\Entity\T100;
use App\Entity\T203;
use App\Entity\T211;
use App\Entity\T320;
use App\Entity\T323;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<T203>
 *
 * @method T203|null find($id, $lockMode = null, $lockVersion = null)
 * @method T203|null findOneBy(array $criteria, array $orderBy = null)
 * @method T203[]    findAll()
 * @method T203[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class T203Repository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, T203::class);
    }

    public function save(T203 $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(T203 $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    /**
     * @return T203[] Returns an array of T203 objects
     */
    public function croissement($marke,$dlnr,$vgl): array
    {   //to use to filter the designation
        //$genart = $em->getRepository(T211::class)->findBy(['dlnr' => $t001[0]]);

        return $this->createQueryBuilder('t203')
            ->distinct()
            ->select('t001.marke', ' IDENTITY(t203.khernr) as khernr','t203.dlnr', 'IDENTITY(t203.artnr) as artnr', 't320.genartnr as genartnr')
            ->addSelect('famgeneq.bez as designation', 't012.bez as marque', 't203.refnr as refnr')
            ->from(T001::class, 't001')
            ->from(T320::class, 't320')
            ->from(T030::class, 'famnarteq')
            ->from(T030::class, 'famgeneq')
            ->from(T100::class, 't100')
            ->from(T012::class, 't012')
            ->from(T211::class, 't211')
            ->from(T323::class, 't323')
            ->where('t211.artnr = t203.artnr')
            ->andWhere("famgeneq.sprachnr = '006'")
            ->andWhere("famnarteq.sprachnr = '006'")
            ->andWhere('t211.dlnr = t203.dlnr')
            ->andWhere('t211.genartnr = t320.genartnr')
            ->andWhere('t320.beznr = famgeneq.beznr')
            ->andWhere('t323.beznr = famnarteq.beznr')
            ->andWhere('t320.nartnr = t323.nartnr')
            ->andWhere('t001.dlnr = t203.dlnr')
            ->andWhere("t012.sprachnr = '006' ")
            ->andWhere("t012.lbeznr = t100.lbeznr")
            ->andWhere('t100.hernr = t203.khernr')
            //->andWhere('t320.genartnr IN (:genartnr)')
            ->andWhere('t203.dlnr  = :dlnr')
            ->andWhere('t100.vgl = :vgl')
            ->andWhere('t203.khernr = :marke')
            ->setParameter('marke', $marke[0]->getHernr())
            // ->setParameter('genartnr', $genart)
            ->setParameter('dlnr', $dlnr[0]->getDlnr())
            ->setParameter('vgl', $vgl)
            ->getQuery()
            ->getResult();
        ;
    }

//    public function findOneBySomeField($value): ?T203
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
