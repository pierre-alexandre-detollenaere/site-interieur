<?php

namespace App\Controller;

use App\Repository\UserRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RequestStack;

class UserController extends AbstractController
{
    #[Route('/profile', name: 'app_user_profile')]
    public function showProfile(RequestStack $requestStack): Response
    {

        $session = $requestStack->getSession();
        $user = $session->get('user');

        return $this->render('user/profile.html.twig', [
            "utilisateur" => $user,
        ]);

    }

    
}
