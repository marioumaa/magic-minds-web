<?php

namespace App\Controller;

use App\Entity\User;
use App\Repository\CommandeRepository;
use App\Repository\UserRepository;
use Doctrine\Persistence\ManagerRegistry;
use Mpdf\Mpdf;
use Mpdf\MpdfException;


use phpDocumentor\Reflection\Types\This;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Commande;
use Symfony\Component\HttpFoundation\JsonResponse;

class EmailController extends AbstractController
{
    /**
     * @throws MpdfException
     */
    #[Route('/email', name: 'app_email')]
    public function index(MailerInterface $mailer,UserRepository $userreop,CommandeRepository $commandeRepository,Request $req): Response
    {
        $session=$req->getSession();
        $user=$userreop->find($session->get('id_user'));
        $commands=$commandeRepository->findByUser($user);

        $email = (new Email())
            ->from('hello@example.com')
            ->to('pemabe2194@hidelux.com')
            //->cc('cc@example.com')
            //->bcc('bcc@example.com')
            //->replyTo('fabien@example.com')
            //->priority(Email::PRIORITY_HIGH)
            ->subject('Time for Symfony Mailer!')
            ->text('Sending emails is fun again!')
            ->html('<p>See Twig integration for better HTML integration!</p>');

           $mailer->send($email);
     return $this->redirectToRoute('app_store');
    }

    #[Route('/allcommand/{commandId}', name: 'app_allcommand')]
    public function allcommand(int $commandId,ManagerRegistry $doctrine,CommandeRepository $rep): Response
    {

        // Use ManagerRegistry to get the EntityManager
        $commande = $rep->find($commandId);

        if (!$commande) {
            return new JsonResponse(['message' => 'Command not found'], Response::HTTP_NOT_FOUND);
        }

        $products = $commande->getIdproduct();
        $productsArray = [];
        foreach ($products as $product) {
            $productsArray[] = [
                'id' => $product->getId(),
                'name' => $product->getNom(),
                'price' => $product->getPrix(),
                'description' => $product->getDescription(),
                // Add other product properties as needed
            ];
        }
        var_dump($productsArray);
        return new JsonResponse([
            'commandId' => $commandId,
            'products' => $productsArray,
        ]);
    }
}
