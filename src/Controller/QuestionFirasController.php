<?php

namespace App\Controller;

use App\Entity\questionFiras;
use App\Entity\Reponse;
use App\Form\QuestionFirasType;
use App\Form\ReponseFirasType;

use App\Repository\QuestionFirasRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;
use Knp\Component\Pager\PaginatorInterface;


use Snipe\BanBuilder\CensorWords;


class QuestionFirasController extends AbstractController
{
    #[Route('/question', name: 'app_question')]
    public function index(): Response
    {
        return $this->render('admin.html.twig', [
            'controller_name' => 'QuestionFirasController',
        ]);
    }


    #[Route('/add_question', name: 'add_question')]
    public function add(Request $request, ManagerRegistry $doctrine, SluggerInterface $slugger): Response
    {
        $Question = new questionFiras();
        $form = $this->createForm(QuestionFirasType::class, $Question);
        $form->add('Ajouter', SubmitType::class);
        $form->handleRequest($request);

        // Les lignes de censure
        $censor = new CensorWords;
        $langs = array('fr', 'it', 'en-us', 'en-uk', 'es');
        $badwords = $censor->setDictionary($langs);
        $censor->setReplaceChar("*");

        if ($form->isSubmitted() && $form->isValid()) {
            $brochureFile = $form->get('image')->getData();
            $originalFilename = pathinfo($brochureFile->getClientOriginalName(), PATHINFO_FILENAME);
            $safeFilename = $slugger->slug($originalFilename);
            $newFilename = $safeFilename . '-' . uniqid() . '.' . $brochureFile->guessExtension();
            $brochureFile->move(
                $this->getParameter('upload_directory'),
                $newFilename
            );
            $Question->setImage($newFilename);

            // Censure du contenu du commentaire
            $string = $censor->censorString($Question->getCommentaire());
            $Question->setCommentaire($string['clean']);

            $em = $doctrine->getManager();
            $em->persist($Question);
            $em->flush();
            return $this->redirectToRoute('afficher_qestion');
        }

        return $this->render('question/addquestions.html.twig', [
            'form' => $form->createView()
        ]);
    }


    #[Route('/afficher_qestion', name: 'afficher_qestion')]
    public function AfficheQuestion(QuestionFirasRepository $repo, PaginatorInterface $paginator, Request $request): Response
    {
        //$repo=$this ->getDoctrine()->getRepository(Question::class) ;
        $Question = $repo->findAll();
        $pagination = $paginator->paginate(
            $Question,
            $request->query->getInt('page', 1),
            2// items per page
        );

        return $this->render('question/index.html.twig', [
            'Question' => $pagination,
            'ajoutA' => $Question
        ]);
    }

    #[Route('/afficher_qestion22', name: 'afficher_qestion22')]
    public function AfficheQuestion22(QuestionFirasRepository $repo, PaginatorInterface $paginator, Request $request): Response
    {
        //$repo=$this ->getDoctrine()->getRepository(Question::class) ;
        $Question = $repo->findAll();
        $pagination = $paginator->paginate(
            $Question,
            $request->query->getInt('page', 1),
            1// items per page
        );

        return $this->render('question/index.html22.twig', [
            'Question' => $pagination,
            'ajoutA' => $Question
        ]);
    }

    #[Route('/afficher_questions_plus_de_cinq_likes', name: 'afficher_questions_plus_de_cinq_likes')]
    public function afficherQuestionsPlusDeCinqLikes(QuestionFirasRepository $repo, PaginatorInterface $paginator, Request $request): Response
    {
        $questions = $repo->findQuestionsWithMoreThanFiveLikes();

        $pagination = $paginator->paginate(
            $questions,
            $request->query->getInt('page', 1),
            5 // items per page
        );

        return $this->render('question/addquestions.html1.twig', [
            'questions' => $pagination,
        ]);
    }


    #[Route('/delete_ab/{id}', name: 'delete_ab')]
    public function Delete($id, QuestionFirasRepository $repository, ManagerRegistry $doctrine): Response
    {
        $Question = $repository->find($id);
        $em = $doctrine->getManager();
        $em->remove($Question);
        $em->flush();
        return $this->redirectToRoute("afficher_qestion");

    }

    #[Route('/update_ab/{id}', name: 'update_ab')]
    function update(QuestionFirasRepository $repo, $id, Request $request, ManagerRegistry $doctrine,SluggerInterface $slugger)
    {
        $Question = $repo->find($id);
        $form = $this->createForm(QuestionFirasType::class, $Question);
        $form->add('update', SubmitType::class);
        $form->handleRequest($request);
        $censor = new CensorWords;
        $langs = array('fr', 'it', 'en-us', 'en-uk', 'es');
        $badwords = $censor->setDictionary($langs);
        $censor->setReplaceChar("*");
        if ($form->isSubmitted() && $form->isValid()) {
            $brochureFile = $form->get('image')->getData();
            $originalFilename = pathinfo($brochureFile->getClientOriginalName(), PATHINFO_FILENAME);
            $safeFilename = $slugger->slug($originalFilename);
            $newFilename = $safeFilename . '-' . uniqid() . '.' . $brochureFile->guessExtension();
            $brochureFile->move(
                $this->getParameter('upload_directory'),
                $newFilename
            );
            $Question->setImage($newFilename);

            // Censure du contenu du commentaire
            $string = $censor->censorString($Question->getCommentaire());
            $Question->setCommentaire($string['clean']);
             // var_dump($form->getData()).die;
          //  $Question = $form->getData();
            $em = $doctrine->getManager();
            $em->persist($Question);
            $em->flush();
            return $this->redirectToRoute('afficher_qestion');
        }
        return $this->render('question/updatequestions.html.twig', [
            'form' => $form->createView()
        ]);

    }


    #[Route('/send_message/{name}', name: 'send_message')]
    public function sendMessage(Request $request, ManagerRegistry $doctrine): Response
    {
        $Reponse = new Reponse();
        $form = $this->createForm(ReponseFirasType::class, $Reponse);
        $form->add('Ajouter', SubmitType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $Reponse = $form->getData();
            $em = $doctrine->getManager();
            $em->persist($Reponse);
            $em->flush();
            return $this->redirectToRoute('add_Reponse');
        }
        return $this->render('reponse/frontadd.html.twig', [
            'form' => $form->createView()
        ]);
    }

    #[Route('/statsquestion', name: 'statsquestion')]
    public function statistiques(QuestionFirasRepository $recrepo): Response
    {
        // Mapper chaque type de question à sa couleur spécifique
        $typeColors = [
            'enfant' => '#ff0000', // Rouge
            'parent' => '#00ff00', // Vert

        ];

        // Récupérer toutes les question
        $rec = $recrepo->findAll();

        // Initialiser des tableaux pour stocker les données
        $recColor = [];
        $recCount = [];

        // Compter le nombre de question pour chaque couleur
        foreach ($rec as $reclamation) {
            $color = $typeColors[$reclamation->getType()];

            // Si la couleur n'est pas déjà présente dans le tableau, l'ajouter
            if (!isset($recColor[$color])) {
                $recColor[$color] = $color;
                $recCount[$color] = 0;
            }

            // Incrémenter le nombre de question pour cette couleur
            $recCount[$color]++;
        }

        // Convertir les données en format JSON pour le modèle Twig
        $recColor = array_values($recColor); // Réordonner les clés du tableau
        $recCount = array_values($recCount);

        // Rendre la vue Twig avec les données des statistiques
        return $this->render('stat/stats.html.twig', [
            'recColor' => json_encode($recColor),
            'recCount' => json_encode($recCount),
        ]);
    }

    #[Route('/like/{id}', name: 'like_question')]
    public function likeQuestion($id, QuestionFirasRepository $questionRepository, ManagerRegistry $doctrine): Response
    {
        $question = $questionRepository->find($id);

        if (!$question) {
            throw $this->createNotFoundException('Question not found');
        }

        // Increment the likes count
        $question->like();

        // Get the entity manager from the registry
        $entityManager = $doctrine->getManager();

        // Persist the changes to the database
        $entityManager->persist($question);
        $entityManager->flush();

        return $this->redirectToRoute('afficher_qestion');
    }

    #[Route('/dislike/{id}', name: 'dislike_question')]
    public function dislikeQuestion($id, QuestionFirasRepository $questionRepository, ManagerRegistry $doctrine): Response
    {
        $question = $questionRepository->find($id);

        if (!$question) {
            throw $this->createNotFoundException('Question not found');
        }

        // Increment the dislikes count
        $question->dislike();

        // Get the entity manager from the registry
        $entityManager = $doctrine->getManager();

        // Persist the changes to the database
        $entityManager->persist($question);
        $entityManager->flush();

        return $this->redirectToRoute('afficher_qestion');
    }
}
