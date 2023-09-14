<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CreateLogin extends AbstractController
{

    #[Route("/")]
    public function displayCreateLogin(){
        return $this->render("login-create.html.twig");
    }
}