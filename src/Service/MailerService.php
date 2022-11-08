<?php

namespace App\Service;

use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\Mailer\MailerInterface;

class MailerService
{
    /**
     * @var MailerInterface
     */
    private MailerInterface $mailer;

    public function __construct(MailerInterface $mailer)
    {
        $this->mailer = $mailer;
    }

    public function sendEmail(
        string $from,        
        string $htmlTemplate,
        array $context,
       string $subject,
        string $to = 'cyril.gourdon.02@gmail.com',       
        

    ): void {
        $email = (new TemplatedEmail())
            ->from($from)
            ->to($to)            
            ->subject($subject)
            ->htmlTemplate($htmlTemplate)
            ->context($context);

        $this->mailer->send($email);
    }
}