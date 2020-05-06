<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CompteDJController extends AbstractController
{
    /**
     * @Route("/compte/d/j", name="compte_d_j")
     */
    public function index()
    {
        return $this->render('compte_dj/index.html.twig', [
            'controller_name' => 'CompteDJController',
        ]);
    }
}
