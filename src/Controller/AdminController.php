<?php

namespace App\Controller;

use App\Entity\Produit;
use App\Form\ProduitType;
use App\Repository\CommentaireRepository;
use App\Repository\ProduitRepository;
use Doctrine\Persistence\ManagerRegistry;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
#[
    Route('/admin'),
    IsGranted('ROLE_ADMIN')
]
class AdminController extends AbstractController
{
    #[Route('/admin', name: 'app_admin')]
    public function index(): Response
    {
        return $this->render('Admin/index.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }

    #[Route('/showproduct', name: 'app_showproduct')]
    public function showporduct(ProduitRepository $rep): Response
    {
        $result=$rep->findAll();
        return $this->render('Admin/showproduct.html.twig', [
            'produit'=>$result,
        ]);
    }
    #[Route('/addproduct', name: 'app_addproduct')]
    public function addporduct(ProduitRepository $rep,ManagerRegistry $manger,Request $req): Response
    {
        $em=$manger->getManager();
        $product=new Produit();
        $form=$this->createForm(ProduitType::class,$product);
        $form->handleRequest($req);
        if($form->isSubmitted() and $form->isValid()){
            $em->persist($product);
            $em->flush();
            return $this->redirectToRoute('app_showproduct');
        }
        return $this->renderForm('Admin/addproduit.html.twig', [
            'f'=>$form,
        ]);
    }
    #[Route('/updateproduct/{id}', name: 'app_updateproduct')]
    public function updateporduct($id,ManagerRegistry $manager,ProduitRepository $rep,Request $req): Response
    {
        $em=$manager->getManager();
        $result=$rep->find($id);
        $form=$this->createForm(ProduitType::class,$result);
        $form->handleRequest($req);
        if($form->isSubmitted() and $form->isValid()){
            $em->persist($result);
            $em->flush();
            return $this->redirectToRoute('app_showproduct');
        }
        return $this->renderForm('Admin/addproduit.html.twig', [
            'f'=>$form,
        ]);
    }
    #[Route('/removeproduct/{id}', name: 'app_removeproduct')]
    public function removeporduct($id,ManagerRegistry $manger,ProduitRepository $rep): Response
    {
        $em=$manger->getManager();
        $result=$rep->find($id);
        $em->remove($result);
        $em->flush();
        return $this->redirectToRoute('app_showproduct', [
        ]);
    }
    #[Route('/detailsproduct/{id}', name: 'app_detailsproduct')]
    public function detailsporduct($id,ProduitRepository $rep,CommentaireRepository $rec): Response
    {
        $result=$rep->find($id);
        $comm=$rec->findByProductId($id);
        return $this->render('Admin/detailsproduct.html.twig', [
            'produit'=>$result,
            'comm'=>$comm
        ]);
    }
    #[Route('/deletecomment/{id}/{ic}', name: 'app_deletecomment')]
    public function deletecomment($id,$ic,CommentaireRepository $rec,ManagerRegistry $manger): Response
    {
         $em=$manger->getManager();
        $comm=$rec->find($ic);
        $em->remove($comm);
        $em->flush();
        return $this->redirectToRoute("app_detailsproduct",['id'=>$id]);
    }

}
