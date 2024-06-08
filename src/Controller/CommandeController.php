<?php

namespace App\Controller;

use App\Entity\Commande;
use App\Repository\CommandeRepository;
use App\Repository\ProduitRepository;
use App\Repository\UserRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Mpdf\Mpdf;
use Mpdf\MpdfException;
use App\Entity\User;
use phpDocumentor\Reflection\Types\This;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

class CommandeController extends AbstractController
{
    #[Route('/commande', name: 'app_commande')]
    public function index(UserRepository $userRepository,CommandeRepository $commandeRepository,Request $request): Response
    {
        $session = $request->getSession();
        $userId = $session->get('id_user');
        $user = $userRepository->find($userId);

        if (!$user) {
            throw $this->createNotFoundException('No user found for id '.$userId);
        }

        $commands = $commandeRepository->findByUser($user);

        return $this->render('commande/commande.html.twig', [
            'commands' => $commands,
        ]);
    }
    #[Route('/sheckout', name: 'app_sheckout')]
    public function checkout(MailerInterface $mailer,Request $req,ManagerRegistry $manger,ProduitRepository $rep,UserRepository $repu): Response
    {
        $em=$manger->getManager();
        $session = $req->getSession();
        if($session->get('totalPrice')==0){
            return $this->redirectToRoute('app_store');
        }
        $cart = $session->get('cart', []);
        $user =$repu->find($session->get('id_user'));

        // Create a new Commande entity
        $commande = new Commande();
        $commande->setIduser($user); // Set the user who placed the order

        // Iterate through cart items and add them to the Commande
        foreach ($cart as $productId => $item) {
            $product = $rep->find($productId);
            if ($product) {
                $commande->addIdproduct($product);
            }
        }

        // Calculate the total price of the order
        $totalPrice =$session->get('totalPrice');

        $commande->setTotalprice($totalPrice);

        $em->persist($commande);
        $em->flush();
        // Prepare email content with order details in a table format
        $emailContent = '
<html>
    <head>
        <style>
            table {
                width: 100%;
                border-collapse: collapse;
            }
            th, td {
                border: 1px solid black;
                padding: 8px;
                text-align: left;
            }
            th {
                background-color: #f2f2f2;
            }
        </style>
    </head>
    <body>
        <h2>Your Order Details</h2>
        <table>
            <tr>
                <th>Product Name</th>
                <th>Price</th>
                <th>Description</th>
            </tr>';

        foreach ($cart as $productId => $item) {
            $product = $rep->find($productId);
            if ($product) {
                $emailContent .= '<tr>';
                $emailContent .= '<td>' . htmlspecialchars($product->getNom(), ENT_QUOTES, 'UTF-8') . '</td>';
                $emailContent .= '<td>$' . number_format($product->getPrix(), 2) . '</td>';
                $emailContent .= '<td>' . htmlspecialchars($product->getDescription(), ENT_QUOTES, 'UTF-8') . '</td>';
                $emailContent .= '</tr>';
            }
        }

        $emailContent .= '
            <tr>
                <td colspan="2" style="text-align: right;"><strong>Total Price:</strong></td>
                <td><strong>$' . number_format($totalPrice, 2) . '</strong></td>
            </tr>
        </table>
    </body>
</html>';

// Send email
        $email = (new Email())
            ->from('hello@example.com')
            ->to('pemabe2194@hidelux.com')
            ->subject('Your Order Details')
            ->html($emailContent);

        $mailer->send($email);

        // Clear the cart from the session after checkout
        $session->set('cart', []);
        $session->set('totalPrice',0);
        // Redirect to a confirmation page or show a success message
        return $this->redirectToRoute('app_store'); // Adjust route name as needed
    }
    #[Route('/facture/{commandId}', name: 'app_facture')]
    public function facture($commandId,ManagerRegistry $doctrine,CommandeRepository $rep,UserRepository $urep,Request $req,): Response
    {
        $session=$req->getSession();
        $user=$urep->find($session->get('id_user'));
        $commande = $rep->find($commandId);
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

        // Create PDF
        $mpdf = new Mpdf();
        $htmlContent = file_get_contents('C:\Users\achra\Desktop\pide\Magic-Minds\templates\email\facture.html');
        $htmlContent = str_replace('{user_name}', $user->getFirstName(), $htmlContent);
        $htmlContent = str_replace('{user_last}', $user->getLastName(), $htmlContent);
        $htmlContent = str_replace('{total}',$commande->getTotalprice(), $htmlContent);
        $productsHtml = '';
        foreach ($products as $product) {
            $productsHtml .= '<tr>';
            $productsHtml .= '<td>' . $product->getId() . '</td>';
            $productsHtml .= '<td>' . htmlspecialchars($product->getNom(), ENT_QUOTES, 'UTF-8') . '</td>';
            $productsHtml .= '<td>' . htmlspecialchars($product->getDescription(), ENT_QUOTES, 'UTF-8') . '</td>';
            $productsHtml .= '<td>' ."$". $product->getPrix() . '</td>';
            $productsHtml .= '<td>' . 1 . '</td>';
            $productsHtml .= '</tr>';
        }


        // Replace the products placeholder in the HTML content
        $htmlContent = str_replace('{products}', $productsHtml, $htmlContent);

        $mpdf->WriteHTML($htmlContent);
        $mpdf->Output('contact-us.pdf', 'I');

        // Return a response or redirect as needed
        return new JsonResponse([
            'commandId' => $commandId,
            'products' => $productsArray,
        ]);
    }

    #[Route('/search-commande', name: 'search_commande', methods: ['GET'])]
    public function searchCommande(Request $request, CommandeRepository $commandeRepository): JsonResponse
    {
        $searchTerm = $request->query->get('term', '');
        $price = $request->query->get('price', 0);

        $commands = $commandeRepository->searchByIdAndPrice($searchTerm, $price);

        $responseArray = [];
        foreach ($commands as $command) {
            $responseArray[] = [
                'id' => $command->getId(),
                'totalprice' => $command->getTotalprice(),
            ];
        }

        return $this->json($responseArray);
    }


}
