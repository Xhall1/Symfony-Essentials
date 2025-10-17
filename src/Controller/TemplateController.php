<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class TemplateController extends AbstractController
{
    #[Route('/template', name: 'template_index')]
    public function index(): Response
    {
        return $this->render('template/index.html.twig', [
            'controller_name' => 'TemplateController',
        ]);
    }

    // The thing i did was set parameters and set default parameters
    #[Route('/template/parameter/{id}/{slug}', name: 'template_parameter', defaults:
    ['id'=>1, 'slug'=>'default value'])]
    public function parameter( int $id, string $slug ): Response
    {
        die("id={$id} | slug={$slug}");
    }


}
