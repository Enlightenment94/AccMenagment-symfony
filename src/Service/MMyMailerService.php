<?php
namespace App\Service;

use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Mime\Message;

class MMyMailerService
{
    private $mailer;
    private $host;
    private $port;
    private $username;
    private $password;

    public function __construct(MailerInterface $mailer, $host = null, $port = null, $username = null, $password = null)
    {
        $this->mailer = $mailer;
        $this->host = $host;
        $this->port = $port;
        $this->username = $username;
        $this->password = $password;
    }

    public function testEmailLogin(string $host, int $port, string $username, string $password)
    {
        $transport = new \Swift_SmtpTransport($host, $port);
        $transport->setUsername($username);
        $transport->setPassword($password);
        $swiftMailer = new \Swift_Mailer($transport);

        $message = (new \Swift_Message('Testowa wiadomość'))
        ->setFrom($username)
        ->setTo($username)
        ->setBody('TEST MESSAGE WIN !!!!.');

        try {
            $swiftMailer->send($message);
            return true;
        } catch (\Swift_TransportException $e) {
            return false;
        }
    }

    public function emailTestTo(string $host, int $port, string $username, string $password, string $to): bool
    {
        
        $transport = new \Swift_SmtpTransport($host, $port);
        $transport->setUsername($username);
        $transport->setPassword($password);

        
        $swiftMailer = new \Swift_Mailer($transport);

        
        $message = (new \Swift_Message('Test mail'))
            ->setFrom([$username => 'Sender Name']) 
            ->setTo([$to => 'Recipient Name']) 
            ->setBody('<b>HTML</b>', 'text/html');

        try {
            $swiftMailer->send($message);
            return true; 
        } catch (\Swift_TransportException $e) {
            error_log('Błąd wysyłania wiadomości: ' . $e->getMessage());
            return false; 
        }
    }


    public function verifyMail(string $reciver, string $code)
    {
        // Tworzenie instancji Swift Mailera
        $transport = new \Swift_SmtpTransport($this->host, $this->port);
        $transport->setUsername($this->username);
        $transport->setPassword($this->password);
        $swiftMailer = new \Swift_Mailer($transport);

        // Tworzenie testowej wiadomości email
        $message = (new \Swift_Message($code))
            ->setFrom($this->username)
            ->setTo($reciver)
            ->setBody($code);

        try {
            $swiftMailer->send($message);
            return true;
        } catch (\Swift_TransportException $e) {
            return false;
        }
    }

    public function tokenMail(string $reciver, string $code)
    {
        $transport = new \Swift_SmtpTransport($this->host, $this->port);
        $transport->setUsername($this->username);
        $transport->setPassword($this->password);
        $swiftMailer = new \Swift_Mailer($transport);

        $message = (new \Swift_Message($code))
            ->setFrom($this->username)
            ->setTo($reciver)
            ->setBody($code);

        try {
            $swiftMailer->send($message);
            return true;
        } catch (\Swift_TransportException $e) {
            return false;
        }
    }
}