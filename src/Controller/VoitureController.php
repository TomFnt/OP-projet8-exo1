<?php

namespace App\Controller;

use App\Entity\Voiture;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class VoitureController extends AbstractController
{
    #[Route('/voiture/{id}', name: 'voiture_index')]
    public function index(Voiture $voiture): Response
    {
        if(!$voiture) {
            return $this->redirectToRoute('app_home');
        }


        return $this->render('voiture.html.twig', [
            'voiture' => $voiture,
        ]);
    }
}
