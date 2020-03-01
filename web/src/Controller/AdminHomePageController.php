<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class AdminHomePageController extends AbstractController
{
    /**
     * @Route("/admin/home/page", name="admin_home_page")
     */
    public function index(AuthenticationUtils $authUtils )
    {
        $error = $authUtils->getLastAuthenticationError();
        return $this->render('admin_home_page/index.html.twig', [
            'controller_name' => 'AdminHomePageController',
        ]);
    }
}
