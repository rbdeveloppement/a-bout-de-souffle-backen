<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{
    #[Route('/api/contact', name: 'app_contact')]
    public function index(MailerInterface $mailer, Request $request): JsonResponse
    {
        $data = $request->getContent();

       ["email" => $mail, "message" => $text, "name" => $name] = json_decode($data, true);  
        $userName=$name; //pour recuperer un tableau associatif mettre "true" en paramètre https://www.php.net/manual/fr/function.json-decode.php "associative"
        $adress = $mail;
        $content = $text;
        $email = (new Email())
            ->from($adress)
            ->to('admin@admin.com')
            ->subject('prise de contact')
            ->text($userName." "."\n". $content);

            $mailer->send($email);
            return $this->json(["status"=>200] );        
    }
}

// Dev:Bernier Rémi