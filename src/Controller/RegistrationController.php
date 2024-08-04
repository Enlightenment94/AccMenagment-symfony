<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\Confirm;
use App\Service\MMyMailerService;
use App\Service\CaptchaService;


use App\Form\RegistrationFormType;
use App\Repository\ConfirmRepository;
use App\Repository\UserRepository;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;

require_once(__DIR__ . "/../../config/config.php");

class RegistrationController extends AbstractController
{

    #[Route('/register', name: 'app_register')]
    public function register(Request $request, UserPasswordHasherInterface $userPasswordHasher, EntityManagerInterface $entityManager, MailerInterface $mailer, SessionInterface $session): Response
    {
        $user = new User();
        $form = $this->createForm(RegistrationFormType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $captchaSession = $session->get('captcha');
            $captchaGet = $form->get('captcha')->getData();

            if($captchaSession == $captchaGet){
                $user->setPassword(
                    $userPasswordHasher->hashPassword(
                        $user,
                        $form->get('plainPassword')->getData()
                    )
                );
                $entityManager->persist($user);
                $entityManager->flush();

                $confirm = new Confirm();
                $userId = $user->getId();
                $confirm->setUserId($userId);

                $randomNumber = str_pad(rand(0, pow(10, 10) - 1), 10, '0', STR_PAD_LEFT);
                $randomString = bin2hex(random_bytes(64));
                $confirm->setCode($randomNumber);
                $confirm->setPath($randomString);
                $confirm->setTime(new \DateTime());

                $entityManager->persist($confirm);
                $entityManager->flush();

                $reciver = $user->getEmail();
                $mailer = new MMyMailerService($mailer, MAIL_HOST, 587, MAIL_USERNAME ."@" . MAIL_HOST, MAIL_PASSWORD);
                $mailer->verifyMail($reciver, $randomNumber);

                return $this->render('registration/confirm.html.twig', [
                    'path' => $randomString,
                    'user' => $user, 
                ]);
            }else{
                $captchaService = new CaptchaService();
                $captcha = $captchaService->captcha2();
                $session->set('captcha', $captcha['captcha']);

                return $this->render('registration/register.html.twig', [
                    'registrationForm' => $form->createView(),
                    'captcha' => $captcha['img'],
                    'captcha_ss' => "",
                    'captcha_err' => "",
                    'captcha_code' => $captcha['captcha'],
                ]);
            }
        }

        $captchaService = new CaptchaService();
        $captcha = $captchaService->captcha2();
        $session->set('captcha', $captcha['captcha']);

        return $this->render('registration/register.html.twig', [
            'registrationForm' => $form->createView(),
            'captcha' => $captcha['img'],
            'captcha_err' => '',
            'captcha_ss' => "",
            'captcha_code' => $captcha['captcha'],
        ]);
    }

    #[Route('/resend-confirmation', name: 'resend_confirmation')]
    public function resendConfirmation(Request $request, EntityManagerInterface $entityManager, MailerInterface $mailer, UserRepository $userRepository, ConfirmRepository $confirmRepository): Response
    {
        $email = $request->query->get('email');
        $user = $userRepository->findByMail($email);

        //return new Response("<pre>" . var_dump($user) . "</pre>");        

        if (!$user) {
            return new Response('User not found', 404);
        }

        $confirm = $confirmRepository->findById($user[0]->getId());

        $confirmRepository->deleteByUserId($user[0]->getId());

        if (!$confirm) {
            $confirm = new Confirm();
            $confirm->setUserId($user[0]->getId());

            $randomNumber = str_pad(rand(0, pow(10, 10) - 1), 10, '0', STR_PAD_LEFT);
            $randomString = bin2hex(random_bytes(64));
            $confirm->setCode($randomNumber);
            $confirm->setPath($randomString);
            $confirm->setTime(new \DateTime());



            $entityManager->persist($confirm);
            $entityManager->flush();
        } else {
            $randomNumber = $confirm->getCode();
            $randomString = $confirm->getPath();
        }

        $mailerService = new MMyMailerService($mailer, MAIL_HOST, 587, MAIL_USERNAME . "@" . MAIL_HOST, MAIL_PASSWORD);
        $mailerService->verifyMail($user[0]->getEmail(), $randomNumber);

        return $this->render('registration/confirm.html.twig', [
            'path' => $randomString,
            'user' => $user[0], 
        ]);
    }
}
