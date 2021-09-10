<?php

namespace App\Controller;

use App\Entity\Lieux;
use App\Entity\Sortie;
use App\Form\SortieFormType;
use Doctrine\ORM\EntityManagerInterface;
use http\Env\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SortiesController extends AbstractController
{
    /**
     * @Route("/creerSortie", name="creerSortie")
     */
    public function creerSortie(Request $request): Response
    {

        $sortie = new Sortie();

        $sortieForm = $this->createForm(SortieFormType::class, $sortie);

        $sortieForm->handleRequest($request);


        return $this->render('sorties/creerSortie.html.twig', [
            'serieForm' => $sortieForm->createView()
        ]);
    }
}
