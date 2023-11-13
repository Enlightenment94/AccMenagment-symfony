<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\Confirm;
use App\Service\MMyMailerService;
use App\Service\CaptchaService;

use App\Form\RegistrationFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;

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

                $entityManager->persist($confirm);
                $entityManager->flush();

                $reciver = $user->getEmail();
                $mailer = new MMyMailerService($mailer, "enlightenmentsoftware.xaa.pl", 587, "enlightenment@enlightenmentsoftware.xaa.pl", "{OIffxMW8i.m");
                $mailer->verifyMail($reciver, $randomNumber);
                // do anything else you need here, like send an email

                //return $this->redirectToRoute('post.confirm');
                return $this->render('registration/confirm.html.twig', [
                    'path' => $randomString,
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
        ]);
    }
}
