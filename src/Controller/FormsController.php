<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class FormsController extends AbstractController
{
    #[Route('/forms', name: 'index_form')]
    public function index(): Response
    {
        return $this->render('forms/index.html.twig', [
            'controller_name' => 'FormsController',
        ]);
    }
}
