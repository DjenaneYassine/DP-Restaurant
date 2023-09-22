<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class SecurityController extends AbstractController
{
    #[Route('/', name: 'login_page', methods: 'POST')]
    public function login(){
        return $this->render('login/login.html.twig');
    }
    #[Route('/', name: 'app_logout')]
    public function logout(){

    }

}