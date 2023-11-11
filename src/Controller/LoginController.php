<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Authorization\Voter\AuthenticatedVoter;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\Security\Core\Security;

class LoginController extends AbstractController
{

    #[Route('/', name: 'index')]
    public function index(): Response
    {
        return new RedirectResponse($this->generateUrl('app_login'));
    }

    #[Route('/login', name: 'app_login')]
    public function login(AuthenticationUtils $authenticationUtils, Security $securityContext): Response
    {
        $error = $authenticationUtils->getLastAuthenticationError();
        $lastName = $authenticationUtils->getLastUsername();

        if ($securityContext->isGranted('IS_AUTHENTICATED_FULLY')) {
            return $this->render('dashboard/dashboard.html.twig', [
                'controller_name' => 'LoginController',
                'error' => $error,
                'last_username'=> $lastName
            ]);
        } else {
            return $this->render('login/login.html.twig', [
                'controller_name' => 'LoginController',
                'error' => $error,
                'last_username'=> $lastName
            ]);
        }
    }

    #[Route('/logout', name: 'app_logout')]
    public function logout(): Response
    {
        throw new \Exception("Don't forget active logout in secuirty.yaml");
    }
}
