<?php

namespace App\Controller;

use App\Entity\Evaluation;
use App\Entity\Quiz;
use App\Form\QuizType;
use App\Repository\EvaluationRepository;
use App\Repository\QuizRepository;
use App\Repository\QuestionRepository;
use App\Repository\UserRepository;
use DateTime;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Query\AST\Functions\LowerFunction;
use Doctrine\Persistence\ManagerRegistry;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * CHILD CONTROLLER
 */
#[
    Route('/child'),
    IsGranted('ROLE_CHILD')
]
class QuizzEnfantController extends AbstractController
{
   /* #[Route('/quizz/enfant', name: 'show_all_quiz')]
    public function index(QuizRepository $quizRepo): Response
    {
        $quiz = $quizRepo->findAll();
        return $this->render('Enfant/quizz_enfant/showAllQuiz.html.twig', [
            'quiz' => $quiz,
        ]);
    }*/
    #[Route('/historique/{id}', name: 'app_historique')]
    public function historique($id,EvaluationRepository $evalRepo,UserRepository $userRepo): Response
    {

        $user = $userRepo->find($id);
        $eval=$evalRepo->findByuser($user->getId());
        
        return $this->render('Enfant/quizz_enfant/historique.html.twig', [
            'eval' => $eval
        ]);
    }

    /**
     * @param Request $request
     * @param QuizRepository $quizzRepository
     * @param $id
     * @param EntityManagerInterface $em
     * @param UserRepository $userRepo
     * @return Response
     * Session id User
     */

    #[Route('/result/{id}', name: 'app_quiz_result', methods: ['GET'])]
    public function quizResult(Request $request, QuizRepository $quizzRepository, $id,EntityManagerInterface $em,UserRepository $userRepo): Response
    {
        $result = $request->get('result');
        $quiz = $quizzRepository->find($id);
        $user1 = $this->getUser()->getUserIdentifier();
        $user2 = $userRepo->findByEmail($user1);
        $user=$userRepo->find($id);

        $evaluer = new Evaluation();
        $currentDate = new DateTime();
        $evaluer->setResultat($result);
        $evaluer->setIdUser($user2);
        $evaluer->setIdQuiz($quiz);
        $evaluer->setDate($currentDate);
        $em->persist($evaluer);
        $em->flush();
        
        
        return $this->render('Enfant/quizz_enfant/result.html.twig', [
            'result' => $result,
            'quiz' => $quiz,
        ]);
    }



    #[Route('/showquizzenfant/{id}', name: 'showquizzenfant')]
    public function showquizzenfant(QuizRepository $quizzRepository, $id): Response
    {
        // Récupérer le quiz à partir de son identifiant
        $quiz = $quizzRepository->find($id);

        // Vérifier si le quiz existe
        if (!$quiz) {
            throw $this->createNotFoundException('Le quiz n\'existe pas');
        }

        // Rendre la vue Twig en passant le quiz récupéré comme variable
        return $this->render('Enfant/quizz_enfant/showquizzenfant.html.twig', [
            'quiz' => $quiz
        ]);
    }

    #[Route('/showallquizz', name: 'showallquizz')]
    public function showallquizz(QuizRepository $quizzRepository): Response
    {
        $quizz=$quizzRepository->findAll();
        return $this->render('Enfant/quizz_enfant/showallquizz.html.twig', [
            'quiz' => $quizz
        ]);
    }
  

}
