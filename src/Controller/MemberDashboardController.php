<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MemberDashboardController extends AbstractController
{
    /**
     * @Route("/member/dashboard", name="member_dashboard")
     */
    public function index(): Response
    {
        return $this->render('member_dashboard/index.html.twig', [
            'controller_name' => 'MemberDashboardController',
        ]);
    }
}
