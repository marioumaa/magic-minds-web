<?php

namespace App\Service;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

class MaillerService
{
    public function  __construct(private MailerInterface $mailer){

    }
    public function sendEmail(
        $to= 'benslimenlouay29@gmail.com',

        $content = '<p>See Twig integration for better HTML integration!</p>',
        $subject = 'Time for Symfony Mailer!'
    ):void
    {
        $email = (new Email())
            ->from('demomailtrap@gmail.com')
            ->to($to)
            //->cc('cc@example.com')
            //->bcc('bcc@example.com')
            //->replyTo('fabien@example.com')
            //->priority(Email::PRIORITY_HIGH)
            ->subject($subject)
           // ->text('Sending emails is fun again!')
            ->html($content);

     $this->mailer->send($email);

        // ...
    }
}