<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

class ContactController extends AbstractController
{
    #[Route('/contact', name: 'app_contact')]
    public function contact(): Response
    {
        return $this->render('contact.html.twig');
    }

    #[Route('/contact/send', name: 'app_contact_send', methods: ['POST'])]
    public function send(Request $request, MailerInterface $mailer): Response
    {
        $name = $request->request->get('name');
        $email = $request->request->get('email');
        $message = $request->request->get('message');

        if (empty($name) || empty($email) || empty($message)) {
            $this->addFlash('error', 'Tous les champs sont obligatoires.');
            return $this->redirectToRoute('app_contact');
        }

        // Envoi de l'email
        $emailMessage = (new Email())
            ->from($email)
            ->to('ecoride@exemple.com')
            ->subject('Nouveau message de contact')
            ->text("Nom : $name\nEmail : $email\n\nMessage :\n$message");

        $mailer->send($emailMessage);

        $this->addFlash('success', 'Votre message a été envoyé avec succès.');
        return $this->redirectToRoute('app_contact');
    }
}