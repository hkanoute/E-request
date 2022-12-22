<?php

namespace App\Controller;


use App\Entity\T001;
use App\Entity\T030;
use App\Entity\T100;
use App\Entity\T200;
use App\Entity\T203;
use App\Entity\T210;
use App\Entity\T211;
use App\Entity\T320;
use App\Entity\T323;
use App\Form\T001Type;
use App\Form\T200Type;
use App\Form\T203Type;
use App\Repository\T001Repository;
use App\Repository\T020Repository;
use App\Repository\T100Repository;
use App\Repository\T203Repository;
use App\Repository\T400Repository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    #[Route('/', name: 'app_index')]
    public function index(): Response
    {

        return $this->render('index/index.html.twig', [
        ]);
    }

    #[Route('/vehicle', name: 'app_vehicle')]
    public function vehicle(T400Repository $repository, EntityManagerInterface $entityManager, Request $request): Response
    {

        $form = $this->createForm(T200Type::class, null, [
        ]);


        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            $dlnr = $form->get('dlnr')->getData();
            $artnr = $form->get('artnr')->getData();


            $data = $repository->findByVehicle($artnr, $dlnr);


            return $this->render('index/vehicle.html.twig', [
                'form' => $form->createView(),
                'data' => $data,
            ]);
        }

        return $this->render('index/vehicle.html.twig', ['form' => $form->createView()]);

    }

    #[Route('/dlnr', name: 'app_dlnr')]
    public function dlnr(): Response
    {
        return $this->render('index/dlnr.html.twig', [

        ]);
    }

    #[Route('/hernr', name: 'app_hernr')]
    public function hernr(): Response
    {
        return $this->render('index/hernr.html.twig', [

        ]);
    }

    #[Route('/genartnr', name: 'app_genartnr')]
    public function app_test(T020Repository $t020Repository, Request $request, EntityManagerInterface $em): Response
    {
        $dataToSend = [];

        $data = $t020Repository->getBez();

        foreach ($data as $value) {
            $dataToSend [] = $value['bez'];
        }


        $form = $this->createForm(T001Type::class, null, [
            'data' => $dataToSend
        ]);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $dataLang1 = [];
            $dataLang2 = [];

            $dlnr = $form->get('dlnr')->getData();
            $designation = $form->get('designation')->getData();

            $designationLanguage = $t020Repository->getDesignation($designation);

            $genartnr = $em->getRepository(T001::class)->findByGenartnr($dlnr, $designationLanguage);


            if (count($genartnr) > 0) {
                $sprachnr = $genartnr[0]['sprachnr'];
                foreach ($genartnr as $value) {
                    $value['sprachnr'] === $sprachnr ? $dataLang1[] = $value : $dataLang2 [] = $value;
                }
            }


            return $this->render('index/genartnr.html.twig', [
                'designationLanguage' => $designationLanguage,
                'genartnr' => $genartnr,
                'dataLang1' => $dataLang1,
                'dataLang2' => $dataLang2,
                'form' => $form->createView(),
            ]);
        }


        return $this->render('index/genartnr.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/api/fournisseur/{type}', name: 'app_get_fournisseur', methods: ['GET'])]
    public function getFournisseur(T100Repository $t203Repository, Request $request, string $type): Response
    {
        dump($type);

        return $this->json($t203Repository->findBy([
            'vgl' => $type])
        );
    }


    #[Route('/croissement', name: 'app_croissement')]
    public function croissement(T203Repository $t001Repository, Request $request, EntityManagerInterface $em): Response
    {


        $form = $this->createForm(T203Type::class, null, []);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $t001 = $form->get('dlnr')->getData();
            $pkw = $form->get('Fournisseur')->getData();
            $marke = $form->get('Marque')->getData();

            $genart = $em->getRepository(T211::class)->findOneBy(['dlnr' => $t001[0]->getDlnr()]);


           /* $data = $t001Repository->createQueryBuilder('t203')
                ->distinct()
                ->select('t001.marke', 't203.dlnr', 'IDENTITY(t203.artnr) as artnr', 't320.genartnr as genartnr')
                ->addSelect('famgeneq.bez as designation', 't100.hkz as marque', 't203.refnr as refnr')
                ->from(T001::class, 't001')
                ->from(T320::class, 't320')
                ->from(T030::class, 'famnarteq')
                ->from(T030::class, 'famgeneq')
                ->from(T100::class, 't100')
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
                ->andWhere('t100.hernr = t203.khernr')
                ->andWhere('t320.genartnr = :genartnr')
                ->andWhere('t203.dlnr  = :dlnr')
                ->andWhere('t100.pkw = :pkw')
                ->andWhere('t100.hkz = :marke')
                ->setParameter('marke', $marke)
                ->setParameter('genartnr', $genart->getGenartnr())
                ->setParameter('dlnr', $t001[0]->getDlnr())
                ->setParameter('pkw', $pkw)
                ->getQuery()
                ->getResult();*/

            dump( $pkw, $marke, $genart, $t001[0]->getDlnr());


            return $this->render('index/croissement.html.twig', [
                'form' => $form->createView(),
                //'data' => $data,
            ]);
        }

        return $this->render('index/croissement.html.twig', [
            'form' => $form->createView(),
        ]);
    }

}
