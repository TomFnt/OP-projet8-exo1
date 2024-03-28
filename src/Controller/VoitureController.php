<?php

namespace App\Controller;

use App\Entity\Voiture;
use Doctrine\ORM\EntityManagerInterface;
use Exception;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class VoitureController extends AbstractController
{

    public function __construct(
        private EntityManagerInterface $entityManager,)
    {

    }
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

    #[Route('/voiture/{id}/delete', name: 'voiture_delete')]
    public function supprimerVoiture(Voiture $voiture): Response
    {
        if(!$voiture) {
            return $this->redirectToRoute('app_home');
        }

        $id = $voiture->getId();

        $this->entityManager->remove($voiture);


        try {
            $this->entityManager->flush();


            $this->addFlash('success', "Supression de la voiture n°$id réussi. ");
        }catch (Exception $message )
        {
            $this->addFlash('error', "Une erreur c'est produite lors de la suppression de la voiture n° $id.");
        }


        return $this->redirectToRoute('app_home');
    }
}
