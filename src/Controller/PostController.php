<?php

namespace App\Controller;

use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use PDO;

use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Mailer\Exception\TransportExceptionInterface;

//Moje klasy
use App\Repository\ConfirmRepository;
use App\Service\MMyMailerService;

use Symfony\Component\HttpFoundation\Request;

require_once(__DIR__ . "/../../config/config.php");

class PostController extends AbstractController
{
    #[Route('/post', name: 'app_post')]
    public function index(): JsonResponse
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/PostController.php',
        ]);
    }
    
    #[Route('/pdo', methods: ['GET'], name: 'posts.pdo')]
    function pdo(){
        $host = "localhost";
        $user = "root";
        $password = "";
        $dbname = "symfony";

        try {
            $dsn = "mysql:host=" . $host . ";dbname=" . $dbname;
            $pdo = new PDO($dsn, $user, $password);
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            return new Response("PDO GOOD");
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
            exit;
        }
    }

    #[Route('/mail', name: 'app_mail')]
    public function mail(MailerInterface $mailer): Response
    {
        /*
        $email = (new Email())
            ->from('enlightenment@enlightenment.xaa.pl')
            ->to('enlightenmentsoftware@gmail.com')
            ->subject("Test mail")
            ->html("<b>HTML</b>");

        $valueSend = $mailer->send($email);

        $mailer = new MMyMailerService($mailer);
        $value = $mailer->testEmailLogin("enlightenment.xaa.pl", 587, "enlightenment2@enlightenment.xaa.pl", 'CWX,$l$iYC,x');
        */
        
        $to = "enlightenmentsoftware@gmail.com";
        $mailer = new MMyMailerService($mailer);
        //$value = $mailer->emailTestTo("enlightenment.xaa.pl", 587, "enlightenment2@enlightenment.xaa.pl", 'CWX,$l$iYC,x', $to);        
        //$value = $mailer->emailTestTo("enlightenment.xaa.pl", 587, "enlightenment2@enlightenment.xaa.pl", 'CWX,$l$iYC,x', $to);        
        $value = $mailer->emailTestTo(MAIL_HOST , 587, MAIL_USERNAME ."@" . MAIL_HOST, MAIL_PASSWORD, $to);
        return new Response($value . "SEND mail");
    }

    #[Route('/confirmTest', methods: ['GET', 'POST'], name: 'confirmTest')]
    public function confirmTest(ConfirmRepository $confirmRepository){
        $results = $confirmRepository->findAllOrderedById();
        $resultString = '';

        foreach ($results as $result) {
            $resultString .= $result['id'] . ' - ' . $result['code'] . ' - ' .  $result['path'] .  '<br>';
        }

        return new Response($resultString);
    }


    #[Route('/confirm', methods: ['GET'], name: 'post.confirm')]
    public function confirm(): Response
    {
        return  $this->render('registration/confirm.html.twig');
    }

    #[Route('/checkConfirm', methods: ['GET'], name: 'post.checkConfirm')]
    public function checkConfirm(Request $request, ConfirmRepository $confirmRepository, UserRepository $userRepository): Response
    {
        $path = $request->get('path');
        $code = $request->get('code');
        $result = $confirmRepository->findByPath($path);
        if(count($result) > 0 && $result[0]['code'] == $code){
            $userId = $result[0]['userId'];
            $userRepository->verifyUserById($userId);
            $confirmRepository->deleteByUserId($userId);
            return new Response('Verified');
        } else {
            return new Response($path . ' Not verified ' . $code);
        }
    }

    /*
    #[Route('/register', methods: ['GET', 'POST'], name: 'post.register')]
    public function register(){

        return  $this->render('register.html.twig');
    }

    #[Route('/dashboard', methods: ['GET', 'POST'], name: 'post.dashboard')]
    public function dashboard(): Response
    {
        return  $this->render('dashboard.html.twig');
    }*/
}
