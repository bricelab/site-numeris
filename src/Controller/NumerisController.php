<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class NumerisController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index()
    {
        return $this->render('numeris/index.html.twig', [
            'controller_name' => 'NumerisController',
        ]);
    }


    /**
     * @Route("/produitservice", name="produitservice")
     */
    public function homea() {
    	return $this->render('numeris/produitservice.html.twig');
    }

    /**
     * @Route("/examens", name="examens")
     */
    public function homeb() {
    	return $this->render('numeris/examens.html.twig');
    }

    /**
     * @Route("/carriere", name="carriere")
     */
    public function homec() {
    	return $this->render('numeris/carriere.html.twig');
    }

    /**
     * @Route("/formations", name="formations")
     */
    public function homed() {
    	return $this->render('numeris/formations.html.twig');
    }
}
