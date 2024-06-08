<?php

namespace App\Controller;


use App\Entity\Participation;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ParticipationRepository;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Persistence\ManagerRegistry; 
use App\Repository\EvenementRepository;
use App\Repository\UserRepository;






class ParticipationController extends AbstractController
{
    

    /**
     * CHILD
     */
    #[Route('/showParticipationenfant', name: 'showParticipatione'),IsGranted('ROLE_CHILD')]
    public function showquestion(ParticipationRepository $Repository): Response
    {
        $Participation = $Repository->findAll();
        return $this->render('Enfant/showParticipation.html.twig', [
            'Participation' => $Participation
        ]);
    }
    /**
     * PARENT
     */
    #[Route('/deleteParticipation/{id}', name: 'deleteParticipationpa'),IsGranted('ROLE_PARENT')]
    public function deleteParticipationp($id, ParticipationRepository $participationRepository, ManagerRegistry $managerRegistry): Response
    {
        $manager = $managerRegistry->getManager();
        $participation = $participationRepository->find($id);
        $manager->remove($participation);
        $manager->flush();
       
        return $this->redirectToRoute('showParticipationpa');
    }
    /**
     * PARENT
     */
    #[Route('/showParticipationparent', name: 'showParticipationpa'),IsGranted('ROLE_PARENT')]
    public function showquestionp(ParticipationRepository $Repository): Response
    {
        $Participation = $Repository->findAll();
        return $this->render('Parent/showParticipation.html.twig', [
            'Participation' => $Participation
        ]);
    }
    /**
     * CHILD
     */
    #[Route('/deleteParticipation/{id}', name: 'deleteParticipatione'),IsGranted('ROLE_CHILD')]
    public function deleteParticipatione($id, ParticipationRepository $participationRepository, ManagerRegistry $managerRegistry): Response
    {
        $manager = $managerRegistry->getManager();
        $participation = $participationRepository->find($id);
        $manager->remove($participation);
        $manager->flush();
        return $this->redirectToRoute('showParticipatione');
    }
    /**
     * CHILD
     */
    #[Route('/addparticipation/{id}', name: 'addparticipation'),IsGranted('ROLE_CHILD')]
    
    public function addParticipation(Request $request, ManagerRegistry $managerRegistry,$id,UserRepository $urepo, EvenementRepository $repo): Response
    {
        
        $eventId = $repo->find($id);
        $user = $this->getUser()->getUserIdentifier();
        $id_user =$urepo->findByEmail($user) ;
        
        
        $entityManager = $managerRegistry->getManager();
     
        
          // Vérification de la date de fin de l'événement
    $currentDate = new \DateTime();
    if ($currentDate > $eventId->getDateFin()) {
        // Si la date système est postérieure à la date de fin de l'événement, afficher une alerte et rediriger l'utilisateur
        $this->addFlash('warning', 'You cannot participate in an event that has already ended!');
        return $this->redirectToRoute('showevenemente');
    }
        $participation = new Participation();
        $participation->setDate(new \DateTime());
        $participation->setHeure(new \DateTime());
        $participation->setIdUser($id_user);
        $participation->setIdEvenement($eventId);
        
        
        $entityManager->persist($participation);
        $entityManager->flush();
        
        return $this->redirectToRoute('showParticipatione');
    }
    /**
     *   ADMIN
     */
    #[Route('/showParticipationadmin', name: 'showParticipationa'),IsGranted('ROLE_ADMIN')]

    public function showquestionn(ParticipationRepository $Repository): Response
    {
        $Participation = $Repository->findAll();
        return $this->render('Admin/showParticipation.html.twig', [
            'Participation' => $Participation
        ]);
    }
    /**
     *   ADMIN
     */
    #[Route('/deleteParticipationa/{id}', name: 'deleteParticipationa'),IsGranted('ROLE_ADMIN')]
    public function deleteParticipation($id, ParticipationRepository $participationRepository, ManagerRegistry $managerRegistry): Response
    {
        $manager = $managerRegistry->getManager();
        $participation = $participationRepository->find($id);
        $manager->remove($participation);
        $manager->flush();
        return $this->redirectToRoute('showParticipationa');
    }

    /**
     * PROFESSOR
     */
    #[Route('/showParticipationprof', name: 'showParticipationpr'),IsGranted('ROLE_PROFESSOR')]

    public function show(ParticipationRepository $Repository): Response
    {
        $Participation = $Repository->findAll();
        return $this->render('Professeur/showParticipation.html.twig', [
            'Participation' => $Participation
        ]);
    }
    /**
     * PROFESSOR
     */
    #[Route('/deleteParticipationp/{id}', name: 'deleteParticipationp'),IsGranted('ROLE_PROFESSOR')]
    public function deleteParticipationpr($id, ParticipationRepository $participationRepository, ManagerRegistry $managerRegistry): Response
    {
        $manager = $managerRegistry->getManager();
        $participation = $participationRepository->find($id);
        $manager->remove($participation);
        $manager->flush();
        return $this->redirectToRoute('showParticipationpr');
    }
   
    }
    

