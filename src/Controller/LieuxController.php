<?php

namespace App\Controller;

use App\Entity\Lieux;
use App\Form\LieuxFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\FormView;

class LieuxController extends AbstractController
{
    /**
     * @Route("/Create", name="Create")
     */
    public function Create(): Response
    {
        $lieu = new Lieux();
        $LieuForm = $this->createForm(LieuxFormType::class, $lieu);

        return $this->render('sorties/creerSortie.html.twig', [
            'lieuForme' => $LieuForm->createView()
        ]);
    }
}
