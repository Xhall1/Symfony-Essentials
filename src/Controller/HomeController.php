<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class HomeController extends AbstractController
{
    #[Route('/home', name: 'home_index')]
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    #[Route('/home/greetings', name: 'home_greetings')]
    public function greetings(): Response
    {
        die("Hey, im your greetings");
    }

    #[Route('/home/bye', name: 'home_bye')]
    public function bye()
    {
        die("Goodbye...");
    }
}
