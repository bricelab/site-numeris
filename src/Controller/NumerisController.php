<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class NumerisController extends AbstractController
{
    /**
     * @Route("/", name="numeris")
     */
    public function index()
    {
        return $this->render('numeris/index.html.twig', [
            'controller_name' => 'NumerisController',
        ]);
    }
}
