<?php

namespace App\Controller;

use App\Entity\Categorie;
use App\Entity\Cours;
use App\Form\CoursType;
use App\Repository\CategorieRepository;
use App\Repository\CoursRepository;
use Doctrine\Persistence\ManagerRegistry;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CoursController extends AbstractController
{


    /**
     * *  PROFESSOR
     */
    //cours prof 
    #[Route('/cours', name: 'app_cours'),IsGranted('ROLE_PROFESSOR')]
    public function index(): Response
    {
        return $this->render('Professeur\cours\courcemanage.html.twig', [
            'controller_name' => 'CoursController',
        ]);
    }

    /**
     * *  ADMIN
     */
    //CRUD :
    //show all courses admin 
    #[Route('/admin.cource.showlist', name: 'admin.cource.showlist'),
        IsGranted('ROLE_ADMIN')]
    public function adminshowcours(CoursRepository $repo): Response
    {
        $cours = $repo->findAll();
        return $this->render('Admin\cours\showcat.html.twig', [
            'admincourslist' => $cours,
        ]);
    }

    /**
     * * CHILD
     */
    //show all courses 
    #[Route('/cource.showlist', name: 'cource.showlist'),IsGranted('ROLE_CHILD')]
    public function showcours(CoursRepository $repo): Response
    {
        $cours = $repo->findvalid();
        return $this->render('Enfant/cours/courcelist.html.twig', [
            'cours' => $cours,
        ]);
    }

    /**
     * * PARENT OR NORMAL USER
     */
    //show courses grouped by category  //visiteur 
    #[Route('/courcebycategory/{id}', name: 'cource.bycategory'),IsGranted('ROLE_PARENT')]
    public function showbycategory(CoursRepository $repo, $id): Response
    {
        $courslist = $repo->findbycategory($id);
        return $this->render('Visiteur/courcelist.html.twig', [
            'courslist' => $courslist,
        ]);
    }

    #[Route('/showDetails/{id}', name: 'app_showDetails'),
        IsGranted('ROLE_ADMIN')]
    public function showDetails(CoursRepository $repo, $id): Response
    {
        $courslist = $repo->findbycategory($id);
        return $this->render('Admin/cours/showDetail.html.twig', [
            'courslist' => $courslist,
        ]);
    }
    //----------------------------------------------------------------------------------------------//
    //show courses grouped by category with search
    /**
     * * CHILD
     */
    #[Route('/enfant.cources/{id}', name: 'enfant.cources'),]
    public function coursebycategory(CoursRepository $repo, $id, CategorieRepository $repocat, Request $req): Response
    {
        $category = $repocat->find($id);
        $scoursVal = $req->get('key');
        $courslist = $repo->searchcourse($id,$scoursVal);
        if ($req->isXmlHttpRequest()) {
            return new JsonResponse([
                'content' => $this->renderView('Enfant/cours/_coursecontent.html.twig',compact('courslist'))
            ]);
        }
        return $this->render('Enfant/cours/courcelist.html.twig', [
            'courslist' => $courslist,
            'category' => $category->getTitre()
        ]);
    }
    /**
     * *  PROFESSOR
     */
    //add //prof 
    #[Route('/prof.cours.add', name: 'prof.cours.add'),IsGranted('ROLE_PROFESSOR')]
    public function addcours(ManagerRegistry $managerRegistry, Request $req): Response
    {
        $em = $managerRegistry->getManager();
        $cours = new Cours();
        $cours->setStatus('invalid');
        $form = $this->createForm(CoursType::class, $cours);
        $form->handleRequest($req);
        if ($form->isSubmitted() and $form->isValid()) {
            $em->persist($cours);
            $em->flush();
            $cat = $cours->getCategorie();
            $id_cat = $cat->getId();
            return $this->redirectToRoute('category.showbyid', ['id' => $id_cat]);
        }
        return $this->renderForm('Professeur\cours\addcourse.html.twig', [
            'f_cours' => $form
        ]);
    }
    //addadmin
    /**
     * *  ADMIN
     */
    #[Route('/admin.cours.add', name: 'admin.cours.add'),
        IsGranted('ROLE_ADMIN')]
    public function adminaddcours(ManagerRegistry $managerRegistry, Request $req): Response
    {
        $em = $managerRegistry->getManager();
        $cours = new Cours();
        $cours->setStatus('valid');
        $form = $this->createForm(CoursType::class, $cours);
        $form->handleRequest($req);
        if ($form->isSubmitted() and $form->isValid()) {
            $categorie=$cours->getCategorie();
            if($categorie instanceof Categorie){
                $categorie->setNbrChapitre($categorie->getNbrChapitre()+$cours->getNbChapitre());
                $categorie->setNbrCours($categorie->getNbrCours()+1);
            }
            $em->persist($cours);
            $em->flush();
            return $this->redirectToRoute('admin.category.show');
        }
        return $this->renderForm('admin\cours\addcourse.html.twig', [
            'f_cours' => $form
        ]);
    }

    /**
     * *  PROFESSOR
     */
    //Delete//prof 
    #[Route('/prof.cours.delete/{id}', name: 'prof.cours.delete'),IsGranted('ROLE_PROFESSOR')]
    public function prof_cours_delete($id, coursRepository $repo, ManagerRegistry $managerRegistry): Response
    {
        $em = $managerRegistry->getManager();
        $cours = $repo->find($id);
        $categorie=$cours->getCategorie();
            if($categorie instanceof Categorie){
                $categorie->setNbrChapitre($categorie->getNbrChapitre()-$cours->getNbChapitre());
                $categorie->setNbrCours($categorie->getNbrCours()-1);
            }
        $cat = $cours->getCategorie();
        $id_cat = $cat->getId();
        $em->remove($cours);
        $em->flush();

        return $this->redirectToRoute('category.showbyid', ['id' => $id_cat]);
    }
    /**
     * *  ADMIN
     */
    //Delete//admin
    #[Route('/admin.cours.delete/{id}', name: 'app_admin.cours.delete'),
        IsGranted('ROLE_ADMIN')]
    public function admin_cours_delete($id, coursRepository $repo, ManagerRegistry $managerRegistry): Response
    {
        $em = $managerRegistry->getManager();
        $cours = $repo->find($id);
        $categorie=$cours->getCategorie();
            if($categorie instanceof Categorie){
                $categorie->setNbrChapitre($categorie->getNbrChapitre()-$cours->getNbChapitre());
                $categorie->setNbrCours($categorie->getNbrCours()-1);
            }
        $em->remove($cours);
        $em->flush();

        return $this->redirectToRoute('admin.category.show');
    }
    /**
     * *  PROFESSOR
     */
    //update prof 
    #[Route('/prof.cours.edit/{id}', name: 'prof.cours.edit'),IsGranted('ROLE_PROFESSOR')]
    public function editcours($id, ManagerRegistry $managerRegistry, Request $req, coursRepository $repo): Response
    {
        $em = $managerRegistry->getManager();
        $c=$repo->find($id);
        $cours = $repo->find($id);
        $form = $this->createForm(coursType::class, $cours);
        $form->handleRequest($req);
        if ($form->isSubmitted() and $form->isValid()) {
            $categorie=$cours->getCategorie();
            if($categorie instanceof Categorie){
                $categorie->setNbrChapitre($categorie->getNbrChapitre()-$c->getNbChapitre());
                $categorie->setNbrChapitre($categorie->getNbrChapitre()+$cours->getNbChapitre());
            }
            $id_cat = $categorie->getId();
            $em->persist($cours);
            $em->flush();
            return $this->redirectToRoute('category.showbyid', ['id' => $id_cat]);
        }
        return $this->renderForm('Professeur\cours\editcourse.html.twig', [
            'editf' => $form,
        ]);
    }
    /**
     * *  ADMIN
     */
    //update admin
    #[Route('/admin.cours.edit/{id}', name: 'app_admin.cours.edit'),
        IsGranted('ROLE_ADMIN')]
    public function admineditcours($id, ManagerRegistry $managerRegistry, Request $req, coursRepository $repo): Response
    {
        $em = $managerRegistry->getManager();
        $c=$repo->find($id);
        $cours = $repo->find($id);
        $form = $this->createForm(coursType::class, $cours);
        $form->handleRequest($req);
        if ($form->isSubmitted() and $form->isValid()) {
            $categorie=$cours->getCategorie();
            if($categorie instanceof Categorie){
                $categorie->setNbrChapitre($categorie->getNbrChapitre()-$c->getNbChapitre());
                $categorie->setNbrChapitre($categorie->getNbrChapitre()+$cours->getNbChapitre());
            }
            $em->persist($cours);
            $em->flush();
            return $this->redirectToRoute('admin.category.show');
        }
        return $this->renderForm('Admin\cours\editcours.html.twig', [
            'editf' => $form,
        ]);
    }
    /**
     * *  ADMIN
     */
    //validate admin
    #[Route('/admin.cours.valid/{id}', name: 'app_admin.cours.valid'),
        IsGranted('ROLE_ADMIN')]
    public function adminvalidcours($id, ManagerRegistry $managerRegistry, Request $req, coursRepository $repo): Response
    {
        $em = $managerRegistry->getManager();
        $cours = $repo->find($id);
        $categorie=$cours->getCategorie();
        if($categorie instanceof Categorie){
            $categorie->setNbrChapitre($categorie->getNbrChapitre()+$cours->getNbChapitre());
            $categorie->setNbrCours($categorie->getNbrCours()+1);
        }
        $cours->setStatus('valid');
        $em->persist($cours);
        $em->flush();
        return $this->redirectToRoute('admin.category.show');
    }   
}
