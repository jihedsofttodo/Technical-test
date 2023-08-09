<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractController
{
    #[Route('/dashboard', name: 'app_dashboard')]
    public function index(): Response
    {
        return $this->render('dashboard/index.html.twig', [
            'controller_name' => 'DashboardController',
        ]);
    }
    #[Route('/manage-posts', name: 'manage_posts')]
    public function manage_posts(): Response
    {
        return $this->render('dashboard/posts.html.twig', [
            'controller_name' => 'DashboardController',
        ]);
    }

    #[Route('/manage-users', name: 'manage_users')]
    public function users(): Response
    {
        return $this->render('dashboard/users.html.twig', [
            'controller_name' => 'DashboardController',
        ]);
    }
}
