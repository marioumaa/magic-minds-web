<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends AbstractController
{
    #[Route(path: '/login', name: 'app_login')]
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
//         if ($this->getUser()->getRoles() == "ROLE_PROFESSOR") {
//             return $this->redirectToRoute('app_test');
//         }

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('security/login.html.twig', ['last_username' => $lastUsername, 'error' => $error]);
    }
    #[Route(path: '/login_check', name: 'login_check')]
    public function loginCheck(Request $request)
    {
        // Redirect user to a specific space based on some condition
        if ( $this->isGranted("ROLE_CHILD") || $this->isGranted( "ROLE_PROFESSOR") || $this->isGranted( "ROLE_PARENT") ) {
            return $this->redirectToRoute('home');

        }
            // Handle other cases or provide a default redirect
            return $this->redirectToRoute('app_dashboard');

    }

    #[Route(path: '/logout', name: 'app_logout')]
    public function logout(): void
    {
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }
}
