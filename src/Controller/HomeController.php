<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{

    #[Route("/")]
    public function displayBaseTemplate(){
        return $this->render("base.html.twig");
    }
}