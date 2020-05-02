<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class SignUpController extends AbstractController
{
    /**
     * @Route("/signup", name="sign_up")
     */
    public function index()
    {
        return $this->render('login/signup.html.twig', [    
            'controller_name' => 'SignUpController',
        ]);
    }
}
