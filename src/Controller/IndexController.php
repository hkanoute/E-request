<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
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
}
