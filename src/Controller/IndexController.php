<?php

namespace App\Controller;


use App\Entity\T001;
use App\Entity\T012;
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
use App\Repository\T012Repository;
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
    public function getFournisseur(T012Repository $t012Repository, string $type): Response
    {


        return $this->json($t012Repository->createQueryBuilder('t012')
            ->from(T100::class, 't100')
            ->distinct()
            ->select('t012.bez')
            ->where("t012.sprachnr = '006'")
            ->andWhere('t012.lbeznr = t100.lbeznr')
            ->andWhere('t100.vgl = :type')
            ->setParameter('type', $type)
            ->getQuery()
            ->getResult());
    }


    #[Route('/croissement', name: 'app_croissement')]
    public function croissement(T203Repository $t203Repository, Request $request, EntityManagerInterface $em): Response
    {


        $form = $this->createForm(T203Type::class, null, []);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $dlnr = $form->get('dlnr')->getData();

            $vgl = $form->get('Fournisseur')->getData();
            $hkz = $form->get('Marque')->getData();
            $lbeznr = $em->getRepository(T012::class)->findOneBy(['bez' => $hkz]);

            $marke = $em->getRepository(T100::class)->findBy(
                [
                    'lbeznr' => $lbeznr->getLbeznr(),
                ]
            );

            $data = $t203Repository->croissement($marke,$dlnr,$vgl);


            return $this->render('index/croissement.html.twig', [
                'form' => $form->createView(),
                'croissement' => $data,
            ]);
        }

        return $this->render('index/croissement.html.twig', [
            'form' => $form->createView(),
        ]);
    }

}
