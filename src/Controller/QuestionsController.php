<?php

namespace App\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Component\HttpFoundation\RedirectResponse;
use App\Repository\QuizRepository;
use App\Form\QuestionType;
use App\Entity\Question;
use Doctrine\Persistence\ManagerRegistry;
use App\Repository\QuestionRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
/**
 * PROFESSOR
 */
#[
    Route('/prof'),
    IsGranted('ROLE_PROFESSOR')
]
class QuestionsController extends AbstractController
{
    #[Route('/questions', name: 'app_questions')]
    public function index(): Response
    {
        return $this->render('Professeur/questions/index.html.twig', [
            'controller_name' => 'QuestionsController',
        ]);
    }


    #[Route('/showquestion', name: 'showquestion')]
    public function showquestion(QuestionRepository $questionsRepository): Response
    {
        $question=$questionsRepository->findAll();
        return $this->render('Professeur/questions/showquestion.html.twig', [
            'question' => $question
        ]);
    }
    #[Route('/addquestion', name: 'addquestion')]
    public function addquestion(QuestionRepository $questionsRepository,ManagerRegistry $managerRegistry,Request $request): Response
    {
        $manager=$managerRegistry->getManager();
        $question=new Question();
        $form=$this->createForm(QuestionType::class,$question);
        $form->handleRequest($request);
        if($form->isSubmitted() and $form->isValid())
        {
            $manager->persist($question);
            $manager->flush();
            return $this->redirectToRoute('questions_for_quiz', ['quizId' => $question->getQuiz()->getId()]);
        }
       
        
        return $this->renderForm('Professeur/questions/addquestion.html.twig', [
            'form' => $form,
            'quiz' => $question->getQuiz()
        ]);
    }

    #[Route('/editquestion/{id}', name: 'editquestion')]
    public function editquestion($id,QuestionRepository $questionsRepository,ManagerRegistry $managerRegistry,Request $request): Response
    {
        $manager=$managerRegistry->getManager();
        $dataaid=$questionsRepository->find($id);
        $form=$this->createForm(QuestionType::class,$dataaid);
        $form->handleRequest($request);
        if($form->isSubmitted() and $form->isValid())
        {
            $manager->persist($dataaid);
            $manager->flush();
            $quizId = $dataaid->getQuiz()->getId();
            return new RedirectResponse($this->generateUrl('questions_for_quiz', ['quizId' => $quizId]));
            /*return $this->redirectToRoute('showquestion');*/
        }
       
        
        return $this->renderForm('Professeur/questions/editquestion.html.twig', [
            'form' => $form
        ]);
    }
    #[Route('/deletequestion/{id}', name: 'deletequestion')]
    public function deletequestion($id,QuestionRepository $questionsRepository,ManagerRegistry $managerRegistry): Response
    {
        $manager=$managerRegistry->getManager();
        $dataaid=$questionsRepository->find($id);
        $manager->remove($dataaid);
            $manager->flush();
            $quizId = $dataaid->getQuiz()->getId();
            return new RedirectResponse($this->generateUrl('questions_for_quiz', ['quizId' => $quizId]));
           /* return $this->redirectToRoute('showquestion');*/
        
    }
    
    
        /**
         * @Route("/questions/{quizId}", name="questions_for_quiz")
         */
        public function questionsForQuiz(int $quizId, QuizRepository $quizRepository, QuestionRepository $questionRepository): Response
        {
            $quiz = $quizRepository->find($quizId);
    
            if (!$quiz) {
                throw $this->createNotFoundException('Le quiz demandé n\'existe pas');
            }
    
            $questions = $questionRepository->findBy(['quiz' => $quiz]);
    
            return $this->render('Professeur/questions/questions_for_quiz.html.twig', [
                'quiz' => $quiz,
                'questions' => $questions,
            ]);
        }
    



}
    


