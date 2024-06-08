<?php

namespace App\Controller;

use App\Entity\Commentaire;
use App\Form\CommentType;
use App\Repository\CommentaireRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CommentController extends AbstractController
{
    #[Route('/removecomment/{id}/{ip}', name: 'app_removecomment')]
    public function index($id,$ip,ManagerRegistry $manger,CommentaireRepository $rep): Response
    {
        $em=$manger->getManager();
        $comm=$rep->find($id);
        $em->remove($comm);
        $em->flush();
        return $this->redirectToRoute('app_viewproduct',['id' => $ip]);
    }

    #[Route('/updatecomment/{id}/{ip}', name: 'app_updatecomment')]
    public function updatecomment($id,$ip,ManagerRegistry $manger,CommentaireRepository $rep,Request $request): Response
    {
        $em=$manger->getManager();
        $comm=$rep->find($id);
        $form=$this->createForm(CommentType::class,$comm);
        $form->handleRequest($request);
        if ($form->isSubmitted() and $form->isValid()){
            $em->persist($comm);
            $em->flush();
            return $this->redirectToRoute('app_viewproduct',['id'=>$ip]);
        }
       return $this->render('comment/updatecomment.html.twig',[
           'f'=>$form->createView(),
       ]);

    }

}
