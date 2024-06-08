<?php

namespace App\Controller;
use App\Form\QuestionType;
use App\Entity\Question;
use Doctrine\Persistence\ManagerRegistry;
use App\Repository\QuestionRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
/**
 * ADMIN
 */
#[
    Route('/admin'),
    IsGranted('ROLE_ADMIN')
]
class QuestionsAdminController extends AbstractController
{
    #[Route('/questions', name: 'app_questions')]
    public function index(): Response
    {
        return $this->render('Admin/questions_admin/index.html.twig', [
            'controller_name' => 'QuestionsController',
        ]);
    }

    /**
     * ADMIN  PRINCIPLE FUNCTION FOR ADMIN
     */
    #[Route('/showquestionadmin', name: 'showquestionadmin')]
    public function showquestionadmin(QuestionRepository $questionsRepository): Response
    {
        $question=$questionsRepository->findAll();
        return $this->render('Admin/questions_admin/showquestionadmin.html.twig', [
            'question' => $question
        ]);
    }
    #[Route('/addquestionadmin', name: 'addquestionadmin')]
    public function addquestionadmin(QuestionRepository $questionsRepository,ManagerRegistry $managerRegistry,Request $request): Response
    {
        $manager=$managerRegistry->getManager();
        $question=new Question();
        $form=$this->createForm(QuestionType::class,$question);
        $form->handleRequest($request);
        if($form->isSubmitted() and $form->isValid())
        {
            $manager->persist($question);
            $manager->flush();
            return $this->redirectToRoute('showquestionadmin');
        }
       
        
        return $this->renderForm('Admin/questions_admin/addquestionadmin.html.twig', [
            'form' => $form
        ]);
    }

    #[Route('/editquestionadmin/{id}', name: 'editquestionadmin')]
    public function editquestionadmin($id,QuestionRepository $questionsRepository,ManagerRegistry $managerRegistry,Request $request): Response
    {
        $manager=$managerRegistry->getManager();
        $dataaid=$questionsRepository->find($id);
        $form=$this->createForm(QuestionType::class,$dataaid);
        $form->handleRequest($request);
        if($form->isSubmitted() and $form->isValid())
        {
            $manager->persist($dataaid);
            $manager->flush();
            return $this->redirectToRoute('showquestionadmin');
        }
       
        
        return $this->renderForm('Admin/questions_admin/editquestionadmin.html.twig', [
            'form' => $form
        ]);
    }
    #[Route('/deletequestionadmin/{id}', name: 'deletequestionadmin')]
    public function deletequestionadmin($id,QuestionRepository $questionsRepository,ManagerRegistry $managerRegistry): Response
    {
        $manager=$managerRegistry->getManager();
        $dataaid=$questionsRepository->find($id);
        $manager->remove($dataaid);
            $manager->flush();
            return $this->redirectToRoute('showquestionadmin');
        
    }



}
