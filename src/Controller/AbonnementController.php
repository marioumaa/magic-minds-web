<?php

namespace App\Controller;

use App\Entity\Abonnement;
use App\Form\AbonnementType;
use App\Repository\AbonnementRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AbonnementController extends AbstractController
{
  
    //CRUD :
    #[Route('/abonnement', name: 'app_abonnement')]
    public function index(){
        return $this->render('Parent/addabonnement.html.twig');
    }
    //add

    #[Route('/addabonnement/{name}', name: 'app_addabonnement')]
    public function addabonnement(ManagerRegistry $managerRegistry ,$name,):Response
    {
        $em=$managerRegistry->getManager();
        $abonnement=new Abonnement();
        $abonnement->settype($name);
        if($name=="Explorer"){
            $abonnement->setDuree(1);
            $abonnement->setDateDebut(new \DateTime());
            $abonnement->setTarif(30);
        }
        elseif($name=="Silver"){
            $abonnement->setDuree(3);
            $abonnement->setDateDebut(new \DateTime());
            $abonnement->setTarif(60);
        }
        elseif($name=="Golden"){
            $abonnement->setDuree(6);
            $abonnement->setDateDebut(new \DateTime());
            $abonnement->setTarif(100);
        }
        $abonnement->setDuree(12);
        $abonnement->setDateDebut(new \DateTime());
        $abonnement->setTarif(200);

        $em->persist($abonnement);
        $em->flush();
        return $this->render('Parent/addabonnement.html.twig');
    }

    //show
    #[Route('/showabonnement', name: 'app_showabonnement')]
    public function showabonnement(AbonnementRepository $repo): Response
    {
        $abonnement=$repo->findAll();
        return $this->render('Admin/abonnement/showabonnement.html.twig', [
            'abonnement'=> $abonnement,
        ]);
    }

    //Delete
    #[Route('/deleteabonnement/{id}', name: 'app_deleteabonnement')]
    public function deleteabonnement($id ,abonnementRepository $repo, ManagerRegistry $managerRegistry): Response
    {
        $em=$managerRegistry->getManager();
        $abonnement=$repo->find($id);
        $em->remove($abonnement);
        $em->flush();
        
        return $this->redirectToRoute('app_showabonnement') ;
    }

    //update
    #[Route('/editabonnement/{id}', name: 'app_editabonnement')]
    public function editabonnement($id ,ManagerRegistry $managerRegistry, Request $req , abonnementRepository $repo): Response
    {
        $em=$managerRegistry->getManager();
        $abonnement=$repo->find($id);
        $form = $this->createForm(abonnementType::class, $abonnement);
        $form->handleRequest($req);
        if($form->isSubmitted() and $form->isValid()){
            $em->persist($abonnement);
            $em->flush();
            return $this->redirectToRoute('app_showabonnement');
        }
        return $this->renderForm('Admin/abonnement/editabonnement.html.twig', [
            'editf' => $form,
        ]);
    }
}
