<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ServiceController extends AbstractController
{
//    #[Route('/service', name: 'app_service')]
//    public function index(): JsonResponse
//    {
//        return $this->json([
//            'message' => 'Welcome to your new controller!',
//            'path' => 'src/Controller/ServiceController.php',
//        ]);
//    }

    #[Route('/services', name: 'app_services')]
    public function services(): Response
    {
        $services = [
            [
                'title' => 'Conseil en stratégie',
                'description' => 'Aide les entreprises à définir leurs objectifs stratégiques et à élaborer des plans pour les atteindre.',
                'icon' => 'strategy-icon.svg',
                'image' => 'services-1.jpg'
            ],
            [
                'title' => 'Consulting en management',
                'description' => 'Accompagnement dans l\'amélioration des processus organisationnels, de la gestion du changement ou du développement des leaders.',
                'icon' => 'management-icon.svg',
                'image' => 'services-2.jpg'
            ],
            [
                'title' => 'Consulting en ressources humaines',
                'description' => 'Services liés à la gestion des talents, à la culture d\'entreprise, au recrutement ou à la formation.',
                'icon' => 'hr-icon.svg',
                'image' => 'services-3.jpg'
            ],
            [
                'title' => 'Conseil en finance',
                'description' => 'Analyse financière, gestion des coûts, évaluation des performances financières ou aide à la levée de fonds.',
                'icon' => 'finance-icon.svg',
                'image' => 'services-4.jpg'
            ],
            [
                'title' => 'Consulting IT',
                'description' => 'Aide à la mise en œuvre des technologies, à la gestion de projets IT ou à l\'optimisation des systèmes d\'information.',
                'icon' => 'it-icon.svg',
                'image' => 'services-5.jpg'
            ],
            [
                'title' => 'Consulting marketing',
                'description' => 'Élaboration de stratégies marketing, études de marché, ou développement de marque.',
                'icon' => 'marketing-icon.svg',
                'image' => 'services-6.jpg'
            ],
            [
                'title' => 'Consulting en opérations',
                'description' => 'Optimisation des chaînes d\'approvisionnement, gestion de la production ou amélioration de la qualité.',
                'icon' => 'operations-icon.svg',
                'image' => 'services-7.jpg'
            ],
            [
                'title' => 'Consulting en développement durable',
                'description' => 'Accompagnement dans la mise en œuvre de pratiques durables et de responsabilité sociale des entreprises.',
                'icon' => 'sustainability-icon.svg',
                'image' => 'services-8.jpg'
            ],
        ];


        return $this->render('services.html.twig', [
            'services' => $services,
        ]);

    }
}
