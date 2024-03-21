<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class VoitureController extends AbstractController
{
    #[Route('/voiture', name: 'voiture')]
    public function index(): Response
    {
        return $this->render('voiture.html.twig', [
            'controller_name' => 'VoitureController',
        ]);
    }
}
