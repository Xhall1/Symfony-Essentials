<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class TemplateController extends AbstractController
{
    #[Route('/', name: 'template_index')]
    public function index(): Response
    {
        return $this->render('template/index.html.twig');
    }
    #[Route('/template/layout', name: 'template_layout')]
    public function layout(): Response
    {
        return $this->render('template/layout.html.twig');;
    }


    // The thing i did was set parameters and set default parameters
    #[Route('/template/parameter/{id}/{slug}', name: 'template_parameter', defaults:
    ['id'=>1, 'slug'=>'default value'])]
    public function parameter( int $id, string $slug ): Response
    {
        die("id={$id} | slug={$slug}");
    }

    // Managing Errors and 404 Pages
    #[Route('/template/exception/{id}/{slug}', name: 'template_exception', defaults:
        ['id'=>1, 'slug'=>"default value"])]
    public function exception(int $id, string $slug): Response
    {
        if($id === 1)
        {
            die("id={$id} and slug={$slug}");
        } else
        {
            throw $this->createNotFoundException('Esta URL no está disponible');
        }
    }

    #[Route('/template/work', name: 'template_work')]
    public function work(): Response
    {
        // Interpolation

        $name = "San";
        $surname = "Torres";
        $countries = array(
            array(
                "name" => "Colombia",
                "id" => 1
            ),
            array(
                "name" => "Chile",
                "id" => 2
            ),
            array(
                "name" => "Venezuela",
                "id" => 3
            ),
            array(
                "name" => "Argentina",
                "id" => 4
            ),
            array(
                "name" => "Chile",
                "id" => 2
            ),
        );
        return $this->render('template/work.html.twig', compact(
            'name', 'surname', 'countries'
        ));
//        return $this->render('template/work.html.twig', [
//            "name" => $name,
//            "surname" => $surname
//        ]);
//
//        return $this->render('template/work.html.twig', [
//            "name" => "San",
//            "surname" => "Torres"
//        ]);

    }

}
