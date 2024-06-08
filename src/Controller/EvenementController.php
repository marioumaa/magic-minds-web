<?php
namespace App\Controller;

use App\Entity\Evenement;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\EvenementRepository;
use App\Form\EvenementType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Knp\Component\Pager\PaginatorInterface;
use MercurySeries\FlashyBundle\FlashyNotifier as FlashyBundleFlashyNotifier;


class EvenementController extends AbstractController
{
    #[Route('/evenement', name: 'app_evenement')]
    public function index(): Response
    {
        return $this->render('evenement/index.html.twig', [
            'controller_name' => 'EvenementController',
        ]);
    }

    /**
     * PROFESSOR
     */
    #[Route('/showevenementprofesseur', name: 'showevenementp'),IsGranted('ROLE_PROFESSOR')]
    public function showevenementp(EvenementRepository $Repository, Request $request, PaginatorInterface $paginator): Response
    { 
        $categorie = $request->query->get('categorie');
   
    $localisation = $request->query->get('localisation');
    
    if ($categorie) {
        $query = $Repository->findByCategorieOrderedByName($categorie,  $localisation);
    } else {
        $query = $Repository->findAll();
    }
    
        $evenement = $paginator->paginate(
            $query, 
            $request->query->getInt('page', 1),
            2
        );

       return $this->render('Professeur/showEvenement.html.twig', [
        'evenement' => $evenement
    ]);
       
    }
    /**
     * PROFESSOR
     */
    #[Route('/addevenementprofesseur', name: 'addevenement'),IsGranted('ROLE_PROFESSOR')]
    public function addevenement(EvenementRepository $Repository, ManagerRegistry $managerRegistry, Request $request,FlashyBundleFlashyNotifier $flashy): Response
    {
        $manager = $managerRegistry->getManager();
        $evenement = new Evenement();
        $form = $this->createForm(EvenementType::class, $evenement);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $manager->persist($evenement);
            $manager->flush();
            $flashy->success('Event added!', 'http://your-awesome-link.com');
            return $this->redirectToRoute('showevenementp');
        }
        return $this->render('Professeur/addEvenement.html.twig', [
            'form' => $form->createView(),
        ]);
    }
    /**
     * PROFESSOR
     */
    #[Route('/editevenementprofesseur/{id}', name: 'editevenement'),IsGranted('ROLE_PROFESSOR')]
    public function editevenement($id,EvenementRepository $evenementRepository,ManagerRegistry $managerRegistry,Request $request,FlashyBundleFlashyNotifier $flashy): Response
    {
        $manager=$managerRegistry->getManager();
        $dataaid=$evenementRepository->find($id);
        $form1=$this->createForm(EvenementType::class,$dataaid);
        $form1->handleRequest($request);
        if($form1->isSubmitted() and $form1->isValid())
        {
          
            $manager->flush();
            
$flashy->primary('Event updated!', 'http://your-awesome-link.com');
            return $this->redirectToRoute('showevenementp');
        }
       
     return $this->renderForm('Professeur/editEvenement.html.twig', [
            'form' => $form1
        ]);
    }
    /**
     * PROFESSOR
     */
    #[Route('/deleteevenement/{id}', name: 'deleteevenementp'),IsGranted('ROLE_PROFESSOR')]
    public function deleteevenementp($id,EvenementRepository $questionsRepository,ManagerRegistry $managerRegistry,FlashyBundleFlashyNotifier $flashy): Response
    {
        $manager=$managerRegistry->getManager();
        $dataaid=$questionsRepository->find($id);
        $manager->remove($dataaid);
            $manager->flush();
            
$flashy->error('Event deleted', 'http://your-awesome-link.com');
            return $this->redirectToRoute('showevenementp');
        
    }
    /**
     * CHILD
     */
    #[Route('/showevenementenfant', name: 'showevenemente'),IsGranted('ROLE_CHILD')]
    public function showquestionn(EvenementRepository $Repository, Request $request, PaginatorInterface $paginator): Response
    {
        $categorie = $request->query->get('categorie');
        $localisation = $request->query->get('localisation');
    
        if ($categorie) {
            $query = $Repository->findByCategorieOrderedByName($categorie,  $localisation);
        } else {
            $query = $Repository->findAll();
        }
    
        $evenement = $paginator->paginate(
            $query, 
            $request->query->getInt('page', 1),
            3
        );
    
        return $this->render('Enfant/showEvenement.html.twig', [
            'evenement' => $evenement
        ]);
    }

    /**
     * @param EvenementRepository $Repository
     * @param Request $request
     * @param PaginatorInterface $paginator
     * @return Response
     * ADMIN MAIN FUNCTION FOR EVENT
     */
    #[Route('/showevenementadmin', name: 'showevenements'),IsGranted('ROLE_ADMIN')]
    public function showquestions(EvenementRepository $Repository, Request $request, PaginatorInterface $paginator): Response
    {
        $categorie = $request->query->get('categorie');
   
    $localisation = $request->query->get('localisation');
    
    if ($categorie) {
        $query = $Repository->findByCategorieOrderedByName($categorie,  $localisation);
    } else {
        $query = $Repository->findAll();
    }
    
    
        $evenement = $paginator->paginate(
            $query, 
            $request->query->getInt('page', 1), 2
        );
     
        return $this->render('Admin/showEvenement.html.twig', [
            'evenement' => $evenement
        ]);
    }
    /**
     * PARENT
     */
    
    #[Route('/showevenementparent', name: 'showevenementpa'),IsGranted('ROLE_PARENT')]
    public function showevenement(EvenementRepository $Repository, Request $request, PaginatorInterface $paginator): Response
    {
        $categorie = $request->query->get('categorie');
   
    $localisation = $request->query->get('localisation');
    
    if ($categorie) {
        $query = $Repository->findByCategorieOrderedByName($categorie,  $localisation);
    } else {
        $query = $Repository->findAll();
    }
    
    
        $evenement = $paginator->paginate(
            $query, 
            $request->query->getInt('page', 1),
            2
        );
    return $this->render('Parent/showEvenement.html.twig', [
        'evenement' => $evenement
    ]);
       
    }

    /**
     *   ADMIN
     */
    #[Route('/addevenementadmin', name: 'addevenemente'),IsGranted('ROLE_ADMIN')]
    public function addevenements(EvenementRepository $Repository, ManagerRegistry $managerRegistry, Request $request): Response
    {
        $manager = $managerRegistry->getManager();
        $evenement = new Evenement();
        
        
        $form= $this->createForm(EvenementType::class, $evenement);
        
        
        $form->handleRequest($request);
        
       
        if ($form->isSubmitted() && $form->isValid()) {
           
            $manager->persist($evenement);
            $manager->flush();
            
            
            return $this->redirectToRoute('showevenements');
        }
       
        return $this->render('Admin/addEvenement.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     *   ADMIN
     */
    #[Route('/deleteevenementadmin/{id}', name: 'deleteevenementadmin'),IsGranted('ROLE_ADMIN')]
    public function deleteevenement($id,EvenementRepository $questionsRepository,ManagerRegistry $managerRegistry): Response
    {
        $manager=$managerRegistry->getManager();
        $dataaid=$questionsRepository->find($id);
        $manager->remove($dataaid);
            $manager->flush();
            return $this->redirectToRoute('showevenements');
        
    }
    /**
     *   ADMIN
     */
    #[Route('/editevenementadmin/{id}', name: 'editevenemente'),IsGranted('ROLE_ADMIN')]
    public function editevenements($id, EvenementRepository $evenementRepository, ManagerRegistry $managerRegistry, Request $request): Response
    {
        $manager = $managerRegistry->getManager();
        $evenement = $evenementRepository->find($id);
    
        $form = $this->createForm(EvenementType::class, $evenement);
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
           
            $manager->flush();
    
            return $this->redirectToRoute('showevenements');
        }
    
        return $this->render('Admin/editEvenement.html.twig', [
            'form' => $form->createView(),
        ]);
    }


}


