<?php

namespace App\Controller;

use App\Repository\VoitureRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeController extends AbstractController
{

    #[Route( name: 'app_home')]
    public function index(VoitureRepository $voitureRepository): Response
    {

        $voitures = $voitureRepository->findAll();
        return $this->render('accueil.html.twig', [
            'voitures'=> $voitures,
        ]);
    }
}
