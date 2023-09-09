<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{

    #[Route("/")]
    public function showMyName(){
        return $this->render("base.html.twig");
    }
}