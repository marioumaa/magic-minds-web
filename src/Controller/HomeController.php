<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/home', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
    #[Route('/home1', name: 'home')]
    public function index1(): Response
    {
       // Visiteur/home
        return $this->render('base1.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
    #[Route('/home2', name: 'home2')]
    public function index2(): Response
    {
       // Visiteur/home
        return $this->render('aboutUs.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
}
