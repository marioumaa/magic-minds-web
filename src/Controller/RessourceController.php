<?php

namespace App\Controller;

use App\Entity\Categorie;
use App\Entity\Cours;
use App\Entity\Ressource;
use App\Form\RessourceType;
use App\Repository\CategorieRepository;
use App\Repository\CoursRepository;
use App\Repository\RessourceRepository;
use Doctrine\Persistence\ManagerRegistry;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\HttpFoundation\BinaryFileResponse;


class RessourceController extends AbstractController 
{
    //show/enfant :
    /**
     * * CHILD
     */
    #[Route('/ressourcebycourse/{id}', name: 'app_course.chapters'),IsGranted('ROLE_CHILD')]
    public function showbycourse(RessourceRepository $repo ,$id, CoursRepository $crepo): Response
    {
        $ressource=$repo->findbycourse($id);
        $cours=$crepo->find($id);
        return $this->render('Enfant\cours\chapters.html.twig', [
            'ress' => $ressource,
            'course'=>$cours->getTitre()
        ]);
    }
    /**
     * *  PROFESSOR
     */
    #[Route('/Prof/ressourcebycourse/{id}', name: 'app_prof.course.chapters'),IsGranted('ROLE_PROFESSOR')]
    public function Pshowbycourse(RessourceRepository $repo ,$id, CoursRepository $crepo): Response
    {
        $ressource=$repo->findbycourse($id);
        $cours=$crepo->find($id);
        return $this->render('Professeur\cours\showchap.html.twig', [
            'ress' => $ressource,
            'course'=>$cours
        ]);
    }
    /**
     * *  PROFESSOR
     */
    #[Route('/ressource/{id}', name: 'app_ressource'),IsGranted('ROLE_PROFESSOR')]
    public function index(RessourceRepository $repo ,$id): Response
    {

        $ressource=$repo->find($id);
        return $this->render('Professeur\cours\showchap.html.twig', [
            'ress' => $ressource,
        ]);
    }

    #[Route('/ressourced/{id}', name: 'app_ressourced')]
    public function indexd(RessourceRepository $repo ,$id): Response
    {

        $ressource=$repo->find($id);
        $filePath = $this->getParameter('ressource_directory') . '/' . $ressource->getUrl();
        return new BinaryFileResponse($filePath);

    }
    //add
    /**
     * *  PROFESSOR
     */
    #[Route('/newressource', name: 'app_ressource.add'),IsGranted('ROLE_PROFESSOR')]
    public function new(Request $request, ManagerRegistry $managerRegistry, SluggerInterface $slug): Response
    {
        $em=$managerRegistry->getManager();
        $ressource = new Ressource();
        $form = $this->createForm(RessourceType::class, $ressource);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $file=$form->get('file')->getData();
            $chapter=pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
            $safeFilename = $slug->slug($chapter);
            $newFilename = $safeFilename.'-'.uniqid().'.'.$file->guessExtension();
            $file->move(
                $this->getParameter('ressource_directory'),
                $newFilename
            );
            $ressource->setUrl($newFilename);
            $cours=$ressource->getIdCours();
            if($cours instanceof Cours){
                $categorie=$cours->getCategorie();
                if($categorie instanceof Categorie){
                $categorie->setNbrCours($categorie->getNbrCours()+1);
                }
            }
            $em->persist($ressource);
            $em->flush();
            
            // return $this->redirectToRoute('app_ressource_index');
        }

        return $this->renderForm('Professeur\cours\addchapter.html.twig', [
            'f_ressource' => $form,
        ]);
    }
    /**
     * *  PROFESSOR
     */
    // Delete
    #[Route('/deleteressource/{id}', name: 'app_deleteressource'),IsGranted('ROLE_PROFESSOR')]
    public function deleteressource($id, ressourceRepository $repo, ManagerRegistry $managerRegistry, Request $req): Response
    {
        $em = $managerRegistry->getManager();
        $ressource = $repo->find($id);
        $file = $ressource->getUrl();
        unlink($this->getParameter('ressource_directory') . '/' . $file);
        $em->remove($ressource);
        $em->flush();

        return $this->redirectToRoute('app_catAll');
    }
    /**
     * *  ADMIN
     */
    // Delete admin 
    #[Route('/admindeleteressource/{id}', name: 'admindeleteressource'),IsGranted('ROLE_ADMIN')]
    public function admindeleteressource($id, ressourceRepository $repo, ManagerRegistry $managerRegistry, Request $req): Response
    {
        $em = $managerRegistry->getManager();
        $ressource = $repo->find($id);
        $file = $ressource->getUrl();
        unlink($this->getParameter('ressource_directory') . '/' . $file);
        $em->remove($ressource);
        $em->flush();

        return $this->redirectToRoute('admin.category.show');
    }
    //update
    /**
     * *  PROFESSOR
     */
    #[Route('/editressource/{id}', name: 'app_editressource'),IsGranted('ROLE_PROFESSOR')]
    public function editressource($id, ManagerRegistry $managerRegistry, Request $req, ressourceRepository $repo): Response
    {
        $em = $managerRegistry->getManager();
        $ressource = $repo->find($id);
        $ress = $ressource->getUrl();
        $form = $this->createForm(RessourceType::class, $ressource);
        $form->handleRequest($req);
        if ($form->isSubmitted() and $form->isValid()) {
            $f = $form->get('file')->getData();
            if ($f != null) {
                $file = $f->getClientOriginalName();
                $f->move($this->getParameter('ressource_directory'), $file);
                if ($ress != $f) {
                    unlink($this->getParameter('ressource_directory') . '/' . $ress);
                    $ressource->setUrl($file);
                } else {
                    $ressource->setUrl($ress);
                }
            }
            $em->persist($ressource);
            $em->flush();
            return $this->redirectToRoute('category.showbyid', ['id' => $id]);
        }
        return $this->renderForm('Professeur\cours\editcategory.html.twig', [
            'editf' => $form,
        ]);
    }
    /**
     * *  ADMIN
     */
    //update admin
    #[Route('/admineditressouce/{id}', name: 'admineditressouce'),IsGranted('ROLE_ADMIN')]
    public function admineditressouce($id, ManagerRegistry $managerRegistry, Request $req, RessourceRepository $repo): Response
    {
        $em = $managerRegistry->getManager();
        $ressource = $repo->find($id);
        $url = $ressource->getUrl();
        $form = $this->createForm(RessourceType::class, $ressource);
        $form->handleRequest($req);
        if ($form->isSubmitted() and $form->isValid()) {
            $img = $form->get('file')->getData();
            if ($img != null) {
                $file = $img->getClientOriginalName();
                $img->move($this->getParameter('ressource_directory'), $file);
                if ($url != $img) {
                    unlink($this->getParameter('ressource_directory') . '/' . $url);
                    $ressource->setUrl($file);
                } else {
                    $ressource->setUrl($url);
                }
            }
            $em->persist($ressource);
            $em->flush();
            return $this->redirectToRoute('admin.category.show');
        }
        return $this->renderForm('Admin\cours\editcat.html.twig', [
            'editf' => $form,
        ]);
    }
}
