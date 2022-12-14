<?php

namespace App\Controller;


use App\Entity\T001;
use App\Form\T001Type;
use App\Repository\T020Repository;
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

            $sprachnr = $genartnr[0]['sprachnr'];

            foreach ($genartnr as $value) {
                $value['sprachnr'] === $sprachnr ? $dataLang1[] = $value : $dataLang2 [] = $value;
            }

            return $this->render('index/genartnr.html.twig', [
                'designationLanguage' => $designationLanguage,
                'genartnr' => $genartnr,
                'dataLang1' => $dataLang1,
                'dataLang2' => $dataLang2,
                'form' => $form
            ]);
        }


        return $this->render('index/genartnr.html.twig', [
            'form' => $form,
        ]);
    }
}
