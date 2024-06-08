<?php

namespace App\Controller;

use App\Entity\Quiz;
use App\Repository\QuestionRepository;
use App\Form\QuizType;
use App\Repository\EvaluationRepository;
use App\Repository\QuizRepository;
use Doctrine\Persistence\ManagerRegistry;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
/**
 * PROFESSOR
 */
#[
    Route('/prof'),
    IsGranted('ROLE_PROFESSOR')
]
class QuizzController extends AbstractController
{
    #[Route('/quizz', name: 'app_quizz')]
    public function index(): Response
    {
        return $this->render('Professeur/quizz/index.html.twig', [
            'controller_name' => 'QuizzController',
        ]);
    }


   #[Route('/showquizz', name: 'showquizz')]
    public function showquizz(QuizRepository $quizzRepository): Response
    {
        $quizz=$quizzRepository->findAll();
        return $this->render('Professeur/quizz/showquizz.html.twig', [
            'quiz' => $quizz
        ]);
    }



    #[Route('/addquizz', name: 'addquizz')]
    public function addquizz(QuizRepository $quizzRepository,ManagerRegistry $managerRegistry,Request $request): Response
    {
        $manager=$managerRegistry->getManager();
        $quizz=new Quiz();
        $form=$this->createForm(QuizType::class,$quizz);
        $form->handleRequest($request);
        if($form->isSubmitted() and $form->isValid() )
        
          {  $manager->persist($quizz);
            $manager->flush();
            return $this->redirectToRoute('showquizz');
        
          }
        
        return $this->renderForm('Professeur/quizz/addquizz.html.twig', [
            'form' => $form
        ]);
    }


    #[Route('/editquizz/{id}', name: 'editquizz')]
    public function editquizz($id,QuizRepository $quizzRepository,ManagerRegistry $managerRegistry,Request $request): Response
    {
        $manager=$managerRegistry->getManager();
        $dataaid=$quizzRepository->find($id);
        $form=$this->createForm(QuizType::class,$dataaid);
        $form->handleRequest($request);
        if($form->isSubmitted() and $form->isValid())
        {
            $manager->persist($dataaid);
            $manager->flush();
            return $this->redirectToRoute('showquizzid', ['id' => $id]);

        }
       
        
        return $this->renderForm('Professeur/quizz/editquizz.html.twig', [
            'form' => $form
        ]);
    }

    #[Route('/deletequizz/{id}', name: 'deletequizz')]
    public function deletequizz($id,QuizRepository $quizzRepository,ManagerRegistry $managerRegistry): Response
    {
        $manager=$managerRegistry->getManager();
        $dataaid=$quizzRepository->find($id);
        $manager->remove($dataaid);
            $manager->flush();
            return $this->redirectToRoute('showquizz');
        
    }


    #[Route('/showquizzid/{id}', name: 'showquizzid')]
    public function showquizzid(int $id, QuizRepository $quizzRepository): Response
    {
        $quiz = $quizzRepository->find($id);

        if (!$quiz) {
            throw $this->createNotFoundException('Quiz not found');
        }

        return $this->render('Professeur/quizz/showquizz_details.html.twig', [
            'quiz' => $quiz
        ]);
    }
    }
    



