<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class TomorrowdreamsController extends AbstractController
{
    /**
     * @Route("/tomorrowdreams", name="tomorrowdreams")
     */
    public function index()
    {
        return $this->render('tomorrowdreams/index.html.twig', [
            'controller_name' => 'TomorrowdreamsController',
        ]);
    }

    /**
     * @Route("/", name="Home")
     */
    public function home() {
        return $this->render('tomorrowdreams/home.html.twig');
    }
   
    
}