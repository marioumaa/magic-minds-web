<?php

namespace App\Controller;

use App\Entity\Commentaire;
use App\Entity\User;
use App\Form\CommentType;
use App\Repository\CommentaireRepository;
use App\Repository\ParentsRepository;
use App\Repository\ProduitRepository;
use App\Repository\UserRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StoreController extends AbstractController
{
    #[Route('/store', name: 'app_store')]
    public function store(ProduitRepository $rep,Request $req,UserRepository $userRepository): Response
    {
        $session=$req->getSession();

         $user =$userRepository->findByEmail($this->getUser()->getUserIdentifier());
        //var_dump($user->getId());
        $session->set('id_user',$user->getId());
        $result=$rep->findAll();
        return $this->render('store/index.html.twig', [
            'product'=>$result,
        ]);
    }
    #[Route('/viewproduct/{id}', name: 'app_viewproduct')]
    public function viewproduct($id,ProduitRepository $rep,ManagerRegistry $manger,Request $req,UserRepository $par,CommentaireRepository $rec): Response
    {
        $session=$req->getSession();
        $em=$manger->getManager();
        $allcomment=$rec->findByProductId($id);
        $pro=$rep->find($id);
        $pr=$par->find($session->get('id_user'));
        $comment=new Commentaire();
        $form=$this->createForm(CommentType::class,$comment);
        $form->handleRequest($req);
        if ($form->isSubmitted() and $form->isValid()){
            $comment->setDate(new \DateTime());
            $comment->setIduser($pr); // Set the parent ID
            $comment->setIdproduit($pro); // Set the product ID
            $em->persist($comment);
            $em->flush();
            return $this->redirectToRoute('app_viewproduct', ['id' => $id]);
        }
        $result=$rep->find($id);
        return $this->render('store/viewproduct.twig', [
            'product'=>$result,'f'=>$form->createView(),'comm'=>$allcomment
        ]);
    }
    #[Route('/addtocart/{id}/{qt}', name: 'app_addtocart')]
    public function addtocart($id,$qt,ProduitRepository $rep,Request $req): Response
    {
        $session=$req->getSession();
        $cart = $session->get('cart', []);

        // Example of adding a product to the cart
        $productIdToAdd = $id; // Example product ID
        $quantityToAdd = $qt;    // Example quantity to add

        // Fetch the product details from the repository based on the product ID
        $product = $rep->find($productIdToAdd);

        // Check if the product exists
        if ($product) {
            // Check if the product already exists in the cart
            if (isset($cart[$productIdToAdd])) {
                // If the product exists, update the quantity
                $cart[$productIdToAdd]['quantity'] += $quantityToAdd;
            } else {
                // If the product doesn't exist, add it to the cart with additional details
                $cart[$productIdToAdd] = [
                    'quantity' => $quantityToAdd,
                    'name' => $product->getNom(), // Fetch the product name from the entity
                    'price' => $product->getPrix(), // Fetch the product price from the entity
                    'img_url' => $product->getImg1(), // Fetch the product image URL from the entity
                ];
            }

            // Save the updated cart back to the session
            $session->set('cart', $cart);
            $totalPrice = $this->calculateTotalPrice($cart);
            $session->set('totalPrice', $totalPrice);
        }
        return $this->redirectToRoute('app_store', [
            'cart' => $cart,
        ]);

    }

    private function calculateTotalPrice($cart): float
    {
        $totalPrice = 0;
        foreach ($cart as $item) {
            $totalPrice += $item['quantity'] * $item['price'];
        }
        return $totalPrice;
    }



}
