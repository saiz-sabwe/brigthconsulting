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
        $services = [
            [
                'titre' => 'Conseil en stratégie',
                'description' => 'Aide les entreprises à définir leurs objectifs stratégiques et à élaborer des plans pour les atteindre.',
                'icon' => 'img/demos/business-consulting-3/icons/blackboard.svg'
            ],
            [
                'titre' => 'Consulting en management',
                'description' => 'Accompagnement dans l\'amélioration des processus organisationnels, de la gestion du changement ou du développement des leaders.',
                'icon' => 'img/demos/business-consulting-3/icons/weight-balance.svg'
            ],
            [
                'titre' => 'Consulting en ressources humaines',
                'description' => 'Services liés à la gestion des talents, à la culture d\'entreprise, au recrutement ou à la formation.',
                'icon' => 'img/demos/business-consulting-3/icons/blackboard.svg'
            ],
            [
                'titre' => 'Conseil en finance',
                'description' => 'Analyse financière, gestion des coûts, évaluation des performances financières ou aide à la levée de fonds.',
                'icon' => 'img/demos/business-consulting-3/icons/weight-balance.svg'
            ]
        ];

        return $this->render('index.html.twig', [
            'services' => $services,
        ]);
//        return $this->render('index.html.twig');
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
