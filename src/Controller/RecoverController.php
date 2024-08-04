<?php

namespace App\Controller;

use App\Repository\TokenRepository;
use App\Repository\UserRepository;
use App\Service\CaptchaService;
use App\Service\MMyMailerService;
use Doctrine\ORM\EntityManagerInterface;
use MongoDB\Driver\Session;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Authorization\Voter\AuthenticatedVoter;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\Security\Core\Security;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use App\Entity\User;

use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

require_once(__DIR__ . "/../../config/config.php");

class RecoverController extends AbstractController
{
    private $requestStack;
    private $passwordEncoder;

    public function __construct(RequestStack $requestStack)
    {
        $this->requestStack = $requestStack;
    }

    #[Route('/recover', name: 'app_recover')]
    public function recover(SessionInterface $session): Response
    {
        $captchaService = new CaptchaService();
        $captcha = $captchaService->captcha2();
        $session->set('captcha', $captcha['captcha']);

        return $this->render('registration/recover.html.twig', [
            'captcha' => $captcha['img'],
        ]);
    }

    #[Route('/sendToken', methods: 'POST', name: 'app_sendToken')]
    public function sendToken(UserRepository $userRepository, TokenRepository $tokenRepository, Request $request, MailerInterface $mailer,  SessionInterface $session): Response
    {
        $captcha = $request->get('captcha');
        $captchaSession = $session->get('captcha');
        if($captcha == $captchaSession) {
            $reciver = $request->get('email');
            $user = $userRepository->findByMail($reciver);
            if (count($user) > 0) {
                //$user['user_id'];
                //$mailer = new MMyMailerService($mailer, "enlightenment2.xaa.pl", 587, "enlightenment2@enlightenment", "CWX,$l$iYC,x");
                $mailer = new MMyMailerService($mailer, MAIL_HOST , 587, MAIL_USERNAME ."@" . MAIL_HOST, MAIL_PASSWORD);
                $token = bin2hex(random_bytes(64));
                $tokenRepository->createToken($token, $user[0]->getId());

                $request = $this->requestStack->getCurrentRequest();
                $baseUrl = $request->getSchemeAndHttpHost() . $request->getBasePath();
                $url = $baseUrl . '/reset/' . $token;

                $mailer->tokenMail($reciver, $url);
                return new Response("Token is send");
            } else {
                return new Response("Token not send send");
            }
        }else{
            return new Response("Wrong captcha");
        }
    }

    #[Route('/reset/{token}', name: 'app_reset')]
    public function resetPassword(TokenRepository $tokenRepository, string $token): Response
    {
        $result = $tokenRepository->findByPath($token);
        if(count($result) > 0 &&  $result[0]->getPath() == $token){
            return $this->render('registration/reset.html.twig', [
                'token' => $token,
            ]);
        }else{
            return new Response("Not validate token" . " " .  $token);
        }
    }

    #[Route('/reset-password', methods: 'POST' , name: 'app_reset_password')]
    public function resetPasswordConfirm(UserRepository $userRepository, TokenRepository $tokenRepository, UserPasswordHasherInterface $userPasswordHasher, EntityManagerInterface $entityManager, Request $request): Response
    {
        $token = $request->get('token');
        $newPassword = $request->get('password');

        $result = $tokenRepository->findByPath($token);
        if(count($result) > 0) {
            $userId = $result[0]->getUserId();
            $user = $userRepository->findById($userId);

            $newHashedPassword = $userPasswordHasher->hashPassword(
                $user[0],
                $newPassword
            );

            $user[0]->setPassword($newHashedPassword);
            $entityManager->persist($user[0]);
            $entityManager->flush();
            return new Response("Password set " . $userId);
        }else{
            return new Response("Not validate token");
        }
    }
}
