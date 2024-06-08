<?php

namespace App\Repository;

use App\Entity\Categorie;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Categorie>
 *
 * @method Categorie|null find($id, $lockMode = null, $lockVersion = null)
 * @method Categorie|null findOneBy(array $criteria, array $orderBy = null)
 * @method Categorie[]    findAll()
 * @method Categorie[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CategorieRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Categorie::class);
    }
    public function topfive(){
        return $this->createQueryBuilder('a')
            ->select('a.titre AS title', 'a.nbrCours AS courseCount')
            ->orderBy('courseCount','DESC')
            ->setMaxResults(5)
            ->getQuery()
            ->getResult();
    }
    public function findNew(){
        return $this->createQueryBuilder('a')
        ->orderBy('a.id','DESC')
        ->setMaxResults(4)
        ->getQuery()
        ->getResult();
    }
   
    
    public function searchbyName($searchVal=null)
    {
        $em = $this->getEntityManager();
        $queryBuilder = $em->createQueryBuilder();
        if($searchVal!=null){
        return $queryBuilder->select('a') 
            ->from(Categorie::class, 'a')
            ->where($queryBuilder->expr()->like('a.titre', ':searchVar'))
            ->setParameter('searchVar', '%'.$searchVal.'%')
            ->setMaxResults(20)
            ->getQuery()
            ->getResult();
        }
        return $queryBuilder->select('a')
        ->from(Categorie::class, 'a')
        ->orderBy('a.titre','ASC')
        ->getQuery()
        ->getResult();
    }
    public function findByOrder(){
        return $this->createQueryBuilder('a')
            ->orderBy('a.titre','DESC')
            ->getQuery()
            ->getResult();
    }
 



    

    //    /**
    //     * @return Categorie[] Returns an array of Categorie objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('c')
    //            ->andWhere('c.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('c.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?Categorie
    //    {
    //        return $this->createQueryBuilder('c')
    //            ->andWhere('c.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
