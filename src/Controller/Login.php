<?php

namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class Login extends AbstractController
{
    #[Route("/")]
    public function displayLogin(){
        return $this->render("login-connex.html.twig");
    }
}