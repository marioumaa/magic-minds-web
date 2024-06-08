<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\SearchUserType;
use App\Form\UserType;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;
#[
    Route('/admin'),
    IsGranted('ROLE_ADMIN')
]
class UserController extends AbstractController
{
    #[Route('/user/show/{id}', name: 'user.show'), IsGranted('ROLE_ADMIN')]
    public function showUserById(UserRepository $repository,$id): Response
    {
        $x = $repository->find($id);
        return $this->render('Admin/UserManagement/ParentUserShow.html.twig', [
            'user' => $x,
        ]);
    }
    #[Route('/user', name: 'app_user')]
    public function showUser(UserRepository $repository): Response
    {
        $x = $repository->findAll();
        return $this->render('Admin/UserManagement/ParentUserDetails.html.twig', [
            'users' => $x,
        ]);
    }

    #[Route('user/delete/{id}', name: 'user.delete')]
    public function deletePersonne(ManagerRegistry $doctrine,User $user = null): Response
    {
        $picture = $this->getParameter('user_directory').'/'.$user->getPicture();

        if($user){

        if (file_exists($picture)) {

           $filesystem = new Filesystem();
           $filesystem->remove($this->getParameter('user_directory') . '/' . $picture);
       }
            $em = $doctrine->getManager();
            $em->remove($user);
            $em->flush();
            $this->addFlash('success','user a été supprimer avec succé ');
        }else{
            $this->addFlash('error','user ne se trouve pas  ');
        }

        return $this->redirectToRoute('user.show1');

    }
    #[Route('/user/add/{id?0}', name: 'user.add')]
    public function editUser(User $user=null,
                             ManagerRegistry $managerRegistry,
                             Request $request,
                             SluggerInterface $slugger,
                             UserPasswordHasherInterface $userPasswordHasher
    ): Response
    {
     $new =false;
     if(!$user){
         $user = new User();
         $new = true;
     }



        $form = $this->createForm(UserType::class,$user);
        $form->handleRequest($request);

        if($form->isSubmitted() and $form->isValid()){

            $picture = $form->get('picture')->getData();

            $password = $form->get('password')->getData();

            $user->setPassword(

                $userPasswordHasher->hashPassword(

                    $user,

                    $password

                ));

            if ($picture) {

                $originalFilename = pathinfo($picture->getClientOriginalName(), PATHINFO_FILENAME);

                $safeFilename = $slugger->slug($originalFilename);

                $newFilename = $safeFilename . '-' . uniqid() . '.' . $picture->guessExtension();

                try {

                    $picture->move(

                        $this->getParameter('user_directory'),

                        $newFilename

                    );

                } catch (FileException $e) {

                    // ... handle exception if something happens during file upload

                }

                $user->setPicture($newFilename);
            }

            $user->setActive(true);

            $manager = $managerRegistry->getManager();

            $manager->persist($user);

            $manager->flush();

            if($new) {
                $message = " a été ajouté avec succès";

            } else {
                $message = " a été mis à jour avec succès";
            }
            $this->addFlash('success',$message);
            return $this->redirectToRoute('user.show1');
        }

        return $this->render('Admin/UserManagement/ParentUserProfile.html.twig', [
            'f' => $form->createView(),
        ]);
    }
    #[Route('/produit', name: 'user.produit'), IsGranted('ROLE_ADMIN')]
    public function index(Request $request, EntityManagerInterface $entityManager,UserRepository $userRepository)
    {
        $role = $request->query->get('role');

        // Vérifiez si le rôle est null ou vide, et attribuez une valeur par défaut si nécessaire
        if ($role === null || $role === '') {
            // Affectez un rôle par défaut ou renvoyez une erreur appropriée
            // Par exemple, si vous voulez afficher tous les utilisateurs si aucun rôle n'est spécifié
            $role = 'ROLE_USER';
        }

        $users = $userRepository->findByRole($role);

        if ($request->isXmlHttpRequest()) {
            return $this->render('Admin/affichageUser.html.twig', [
                'users' => $users,
            ]);
        }

        return $this->render('Admin/affichageUser.html.twig', [
            'users' => $users,
        ]);
    }

    #[Route('/user/show1', name: 'user.show1')]
    public function showUser1(
        UserRepository $repository,
        Request $request

    ): Response
    {
        $users =$repository->findAll();
           $form = $this->createForm(SearchUserType::class);
           $search = $form->handleRequest($request);
           if($form->isSubmitted() && $form->isValid()){
               $users=$repository->search($search->get('mots')->getData());
           }

        return $this->render('Admin/UserManagement/UserShow.html.twig', [
            'users' => $users,
            'form'  => $form->createView()
        ]);
    }
    #[Route('/user/activer/{id}', name: 'user.active')]
    public function activerUser(User $user,ManagerRegistry $managerRegistry)
    {

      $user->setActive(($user->isActive())? false : true);
      $em = $managerRegistry->getManager();
      $em->persist($user);
      $em->flush();
      return new Response('true');
    }

}
