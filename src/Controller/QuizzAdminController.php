<?php

namespace App\Controller;

use App\Entity\Quiz;
use App\Form\QuizType;
use App\Repository\QuizRepository;
use Doctrine\Persistence\ManagerRegistry;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


/**
 * ADMIN
 */
#[
    Route('/admin'),
    IsGranted('ROLE_ADMIN')
]
class QuizzAdminController extends AbstractController
{
    #[Route('/quizz', name: 'app_quizz')]
    public function index(): Response
    {
        return $this->render('Admin/quizz_admin/index.html.twig', [
            'controller_name' => 'QuizzController',
        ]);
    }

    /**
     * ADMIN  PRINCIPLE FUNCTION FOR ADMIN
     */
   #[Route('/showquizzadmin', name: 'showquizzadmin')]
    public function showquizzadmin(QuizRepository $quizzRepository): Response
    {
        $quizz=$quizzRepository->findAll();
        return $this->render('Admin/quizz_admin/showquizzadmin.html.twig', [
            'quiz' => $quizz
        ]);
    }


    #[Route('/addquizzadmin', name: 'addquizzadmin')]
    public function addquizzadmin(QuizRepository $quizzRepository,ManagerRegistry $managerRegistry,Request $request): Response
    {
        $manager=$managerRegistry->getManager();
        $quizz=new Quiz();
        $form=$this->createForm(QuizType::class,$quizz);
        $form->handleRequest($request);
        if($form->isSubmitted() and $form->isValid())
        {
            $manager->persist($quizz);
            $manager->flush();
            return $this->redirectToRoute('showquizzadmin');
        }
       
        
        return $this->renderForm('Admin/quizz_admin/addquizzadmin.html.twig', [
            'form' => $form
        ]);
    }


    #[Route('/editquizzadmin/{id}', name: 'editquizzadmin')]
    public function editquizzadmin($id,QuizRepository $quizzRepository,ManagerRegistry $managerRegistry,Request $request): Response
    {
        $manager=$managerRegistry->getManager();
        $dataaid=$quizzRepository->find($id);
        $form=$this->createForm(QuizType::class,$dataaid);
        $form->handleRequest($request);
        if($form->isSubmitted() and $form->isValid())
        {
            $manager->persist($dataaid);
            $manager->flush();
            return $this->redirectToRoute('showquizzadmin');
        }
       
        
        return $this->renderForm('Admin/quizz_admin/editquizzadmin.html.twig', [
            'form' => $form
        ]);
    }

    #[Route('/deletequizzadmin/{id}', name: 'deletequizzadmin')]
    public function deletequizzadmin($id,QuizRepository $quizzRepository,ManagerRegistry $managerRegistry): Response
    {
        $manager=$managerRegistry->getManager();
        $dataaid=$quizzRepository->find($id);
        $manager->remove($dataaid);
            $manager->flush();
            return $this->redirectToRoute('showquizzadmin');
        
    }
}
