<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DjsmixesController extends AbstractController
{
    /**
     * @Route("/djsmixes", name="djsmixes")
     */
    public function Djsmixes()
    {
        return $this->render('tomorrowdreams/djsmixes.html.twig', [
            'controller_name' => 'DjsmixesController',
        ]);
    }
}
