<?php

namespace App\Controller;

use App\Entity\Categorie;
use App\Form\CategorieType;

use App\Repository\CategorieRepository;
use App\Repository\CoursRepository;
use App\Repository\RessourceRepository;
use DateTime;
use Doctrine\Persistence\ManagerRegistry;
use Knp\Bundle\SnappyBundle\Snappy\Response\PdfResponse;
use Knp\Snappy\Pdf;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CategorieController extends AbstractController
{
    //-----------------------------------------Create PDF ------------------------------------//
    /**
     * *  ADMIN
     */
    #[Route('/generatePDF', name: 'app_generatePDF'),IsGranted('ROLE_ADMIN')]
    public function PDF(Pdf $knpSnappyPdf,CategorieRepository $repo)
    {
        $categories=$repo->findAll();
        $date=new DateTime();
        $html = $this->renderView('Admin/cours/pdf.html.twig', [
            'categories'  => $categories,
            'date' =>$date
        ]);

        return new PdfResponse(
            $knpSnappyPdf->getOutputFromHtml($html),
            'ClassesDetails.pdf'
        );
    }
    

    //-------------------------------------------------------------------------------------------//
    // show //prof

    /**
     * *  PROFESSOR PRINCIPLE FUNCTION FOR PROFESSOR
     */
    #[Route('/showcategoryAll', name: 'app_catAll'),IsGranted('ROLE_PROFESSOR')]
    public function showcategorie(CategorieRepository $repo): Response
    {
        $NewCategories=$repo->findNew();
        $categorie = $repo->findAll();
        return $this->render('Professeur\cours\showcat.html.twig', [
            'categorie' => $categorie,
            'NewCategories' => $NewCategories
        ]);
    }

    /**
     * *  ADMIN PRINCIPLE FUNCTION FOR ADMIN
     */
    // show //admin
    #[Route('/admin.showcategory', name: 'admin.category.show'),IsGranted('ROLE_ADMIN')]
    public function adminshowcategorie(Request $req ,CategorieRepository $repo ,CoursRepository $courepo,RessourceRepository $resrepo): Response
    {
        $filterVal = $req->get('categories');
        $categorie =$repo->findAll();
        $courses = $courepo->filterbycat($filterVal);
        $chapters=$resrepo->findAll();
        if ($req->isXmlHttpRequest()) {
            return new JsonResponse([
                'content' => $this->renderView('Admin/cours/_contentcour.html.twig', compact('courses','categorie','chapters'))
            ]);
        };
        return $this->render('Admin\cours\showcat.html.twig', [
            'categorie' => $categorie,
            'courses'=> $courses,
            'chapters'=> $chapters,
        ]);
    }
    //-----------------------------------------Search----------------------------------------------//
    /**
     * *  ENFANT   PRINCIPLE FUNCTION FOR CHILD
     */
    #[Route('/showcategory', name: 'app_showcat'),IsGranted('ROLE_CHILD')]
    public function searchbynamee( Request $req,CategorieRepository $repository): Response
    {
        $searchVal = $req->get('key');
        $categories = $repository->searchbyName($searchVal);
        if ($req->isXmlHttpRequest()) {
            return new JsonResponse([
                'content' => $this->renderView('Visiteur/_serachcontent.html.twig', compact('categories'))
            ]);
        };
        return $this->render('Enfant\cours\categorylist.html.twig', compact('categories'));
    }
    /**
     * *  PARENT  PRINCIPLE FUNCTION FOR NORMAL USER AND PARENT
     */
    //show visiteur
    #[Route('/showcategoryVisiteur', name: 'app_showcatVisiteur'),IsGranted('ROLE_PARENT')]
    public function searchbyNameV(CategorieRepository $repo, Request $req): Response
    {
        $searchVal = $req->get('key');
        $categories = $repo->searchbyName($searchVal);
        if ($req->isXmlHttpRequest()) {
            return new JsonResponse([
                'content' => $this->renderView('Visiteur/_serachcontent.html.twig', compact('categories'))
            ]);
        };

        return $this->render('Visiteur\Classes.html.twig', compact('categories'));
    }
    /**
     * *  PROFESSOR
     */
    //sow category by id //prof 
    #[Route('/showcategorybyid/{id}', name: 'category.showbyid'),IsGranted('ROLE_PROFESSOR')]
    public function showcategoriebyid(CategorieRepository $repo, $id): Response
    {
        $categorie = $repo->find($id);
        return $this->render('Professeur\cours\Courcebycat.html.twig', [
            'categorie' => $categorie,
        ]);
    }
    /**
     * *  PROFESSOR
     */
    //add
    #[Route('/category.add', name: 'category.add'),IsGranted('ROLE_PROFESSOR')]
    public function addcategorie(ManagerRegistry $managerRegistry, Request $req): Response
    {
        $em = $managerRegistry->getManager();
        $categorie = new Categorie();
        $message=0;
        $form = $this->createForm(CategorieType::class, $categorie);
        $form->handleRequest($req);
        if ($form->isSubmitted() and $form->isValid()) {
            $image = $form->get('image')->getData();
            if($image!=null){
                $file = $image->getClientOriginalName();
            $image->move(
                $this->getParameter('images_directory'),
                $file 
            );
            $categorie->setImage($file);
            $em->persist($categorie);
            $em->flush();
            $id_cat=$categorie->getId();
            return $this->redirectToRoute('category.showbyid', ['id' => $id_cat]);
            }
            $message=1;
        }
        return $this->renderForm('Professeur\cours\addcategory.html.twig', [
            'f_categorie' => $form,
            'imgmessage'=>$message
        ]);
    }
    /**
     * *  ADMIN
     */
    // add admin 
    #[Route('/admin.category.add', name: 'admin.category.add'),IsGranted('ROLE_ADMIN')]
    public function adminaddcategorie(ManagerRegistry $managerRegistry, Request $req): Response
    {
        $em = $managerRegistry->getManager();
        $categorie = new Categorie();
        $form = $this->createForm(CategorieType::class, $categorie);
        $form->handleRequest($req);
        if ($form->isSubmitted() and $form->isValid()) {
            $image = $form->get('image')->getData();
            $file = $image->getClientOriginalName();
            $image->move(
                $this->getParameter('images_directory'),
                $file
            );
            $categorie->setImage($file);
            $em->persist($categorie);
            $em->flush();
            return $this->redirectToRoute('admin.category.show');
        }
        return $this->renderForm('Admin\cours\addcat.html.twig', [
            'f_categorie' => $form,
        ]);
    }




    /**
     * *  PROFESSOR
     */
    // Delete
    #[Route('/deletecategorie/{id}', name: 'app_deletecategorie'),IsGranted('ROLE_PROFESSOR')]
    public function deletecategorie($id, categorieRepository $repo, ManagerRegistry $managerRegistry, Request $req): Response
    {
        $em = $managerRegistry->getManager();
        $categorie = $repo->find($id);
        $image = $categorie->getImage();
        unlink($this->getParameter('images_directory') . '/' . $image);
        $em->remove($categorie);
        $em->flush();

        return $this->redirectToRoute('app_catAll');
    }
    /**
     * *  ADMIN
     */
    // Delete admin 
    #[Route('/admindeletecategorie/{id}', name: 'admindeletecategorie'),IsGranted('ROLE_ADMIN')]
    public function admindeletecategorie($id, categorieRepository $repo, ManagerRegistry $managerRegistry, Request $req): Response
    {
        $em = $managerRegistry->getManager();
        $categorie = $repo->find($id);
        $image = $categorie->getImage();
        unlink($this->getParameter('images_directory') . '/' . $image);
        $em->remove($categorie);
        $em->flush();

        return $this->redirectToRoute('admin.category.show');
    }

    /**
     * *  PROFESSOR
     */
    //update
    #[Route('/editcategorie/{id}', name: 'app_editcategorie'),IsGranted('ROLE_PROFESSOR')]
    public function editcategorie($id, ManagerRegistry $managerRegistry, Request $req, categorieRepository $repo): Response
    {
        $em = $managerRegistry->getManager();
        $categorie = $repo->find($id);
        $image = $categorie->getImage();
        $form = $this->createForm(categorieType::class, $categorie);
        $form->handleRequest($req);
        if ($form->isSubmitted() and $form->isValid()) {
            $img = $form->get('image')->getData();
            if ($img != null) {
                $file = $img->getClientOriginalName();
                $img->move($this->getParameter('images_directory'), $file);
                if ($image != $img) {
                    unlink($this->getParameter('images_directory') . '/' . $image);
                    $categorie->setImage($file);
                } else {
                    $categorie->setImage($image);
                }
            }
            $em->persist($categorie);
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
    #[Route('/admineditcategorie/{id}', name: 'admineditcategorie'),IsGranted('ROLE_ADMIN')]
    public function admineditcategorie($id, ManagerRegistry $managerRegistry, Request $req, categorieRepository $repo): Response
    {
        $em = $managerRegistry->getManager();
        $categorie = $repo->find($id);
        $image = $categorie->getImage();
        $form = $this->createForm(categorieType::class, $categorie);
        $form->handleRequest($req);
        if ($form->isSubmitted() and $form->isValid()) {
            $img = $form->get('image')->getData();
            if ($img != null) {
                $file = $img->getClientOriginalName();
                $img->move($this->getParameter('images_directory'), $file);
                if ($image != $img) {
                    unlink($this->getParameter('images_directory') . '/' . $image);
                    $categorie->setImage($file);
                } else {
                    $categorie->setImage($image);
                }
            }
            $em->persist($categorie);
            $em->flush();
            return $this->redirectToRoute('admin.category.show');
        }
        return $this->renderForm('Admin\cours\editcat.html.twig', [
            'editf' => $form,
        ]);
    }
}
