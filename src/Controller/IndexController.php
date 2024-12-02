<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class IndexController extends AbstractController
{
    #[Route('/index', name: 'app_index')]
    public function indexs(): Response
    {
        return $this->render('index/index.html.twig', [
            'controller_name' => 'IndexController',
        ]);
    }

    #[Route('/', name: 'app_index')]
    public function index(): Response
    {
        return $this->render('index.html.twig');
    }

    #[Route('/about', name: 'app_about')]
    public function about(): Response
    {
        return $this->render('about.html.twig');
    }

    #[Route('/cases', name: 'app_cases')]
    public function cases(): Response
    {
        return $this->render('cases.html.twig');
    }

    #[Route('/contact', name: 'app_contact')]
    public function contact(): Response
    {
        return $this->render('cases.html.twig');
    }

    #[Route('/services', name: 'app_services')]
    public function services(): Response
    {
        return $this->render('services.html.twig');
    }

    #[Route('/blog', name: 'app_blog')]
    public function blog(): Response
    {
        return $this->render('blog.html.twig');
    }

    #[Route('/team', name: 'app_team')]
    public function team(): Response
    {
        return $this->render('team.html.twig');
    }
}
