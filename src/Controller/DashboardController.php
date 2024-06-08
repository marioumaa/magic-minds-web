<?php

namespace App\Controller;

use App\Repository\CategorieRepository;
use App\Repository\CoursRepository;
use App\Repository\EvenementRepository;
use App\Repository\ProductRepository;
use App\Repository\UserRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
#[
    Route('/admin'),
    IsGranted('ROLE_ADMIN')
]
class DashboardController extends AbstractController
{

    #[Route('/dashboard', name: 'app_dashboard')]
    public function statics(CategorieRepository $Catrep,CoursRepository $Crep,UserRepository $Urep,ProductRepository $Prep ,EvenementRepository $Erep): Response
    {
        $Tcourses=$Crep->totalCourses();
        $Tuser=$Urep->totalUser();
        $Tproduct=$Prep->totalProduct();
        $Tevent=$Erep->totalEvent();

        $Tmale=$Urep->totalGender("male");
        $Tfemale=$Urep->totalGender("female");

        $bestCat=$Catrep->topfive();
        $categoryNames = [];
        foreach ($bestCat as $category) {
            $categoryNames[] = $category['title'];
        }
        $categoryNbrC = [];
        foreach ($bestCat as $category) {
            $nbr =  $category['courseCount'];
            $categoryNbrC[] = $nbr !== null ? $nbr : 0;
        }

        return $this->render('Admin/dashboard.html.twig', [
            'Tusers' => $Tuser,
            'Tcourses' => $Tcourses,
            'Tproduct' => $Tproduct,
            'Tevent' => $Tevent,

            'Tfemale' => $Tfemale,
            'Tmale' => $Tmale,

            'topName'=>json_encode($categoryNames),
            'topNbr'=>json_encode($categoryNbrC)
        ]);
    }

}
