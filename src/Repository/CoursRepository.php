<?php

namespace App\Repository;

use App\Entity\Cours;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Cours>
 *
 * @method Cours|null find($id, $lockMode = null, $lockVersion = null)
 * @method Cours|null findOneBy(array $criteria, array $orderBy = null)
 * @method Cours[]    findAll()
 * @method Cours[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CoursRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Cours::class);
    }
    public function findvalid()
    {
        return $this->createQueryBuilder('c')
            ->select('c')
            ->Where('c.status = :valid')
            ->setParameter('valid', 'valid')
            ->getQuery()
            ->getResult();
    }
    public function totalCourses(): int {
        return $this->createQueryBuilder('c')
            ->select('COUNT(c.id)')
            ->getQuery()
            ->getSingleScalarResult();
    }
    public function findbycategory($id)
    {
        return $this->createQueryBuilder('c')
            ->join('c.categorie','a')
            ->addSelect('a')
            ->where('a.id=:id')
            ->andWhere('c.status = :valid')
            ->setParameter('id',$id)
            ->setParameter('valid', 'valid')
            ->getQuery()
            ->getResult();
    }
    public function findbycategoryprof($id)
    {
        return $this->createQueryBuilder('c')
            ->join('c.categorie','a')
            ->addSelect('a')
            ->where('a.id=:id')
            ->setParameter('id',$id)
            ->getQuery()
            ->getResult();
    }
    public function searchcourse($id,$scoursVal=null)
    {
        $em = $this->getEntityManager();
        $queryBuilder = $em->createQueryBuilder();
        if($scoursVal!=null){
        return $queryBuilder->select('c') 
            ->from(Cours::class , 'c')
            ->where($queryBuilder->expr()->like('c.titre', ':scoursVal'))
            ->orWhere($queryBuilder->expr()->like('c.duree', ':scoursVal'))
            ->orWhere($queryBuilder->expr()->like('c.nbChapitre', ':scoursVal'))
            ->setParameter('scoursVal', '%'.$scoursVal.'%')
            ->setMaxResults(20)
            ->getQuery()
            ->getResult();
        }
        return $queryBuilder->select('c')
        ->from(Cours::class, 'c')
        ->join('c.categorie','a')
        ->addSelect('a')
        ->where('a.id=:id')
        ->setParameter('id',$id)
        ->getQuery()
        ->getResult();
    }
    public function filterbycat($filterVal=null)
    {
        $em = $this->getEntityManager();
        $queryBuilder = $em->createQueryBuilder();
        if($filterVal!=null){
        return $queryBuilder->select('c') 
            ->from(Cours::class, 'c')
            ->where('c.categorie IN(:filterVar)')
            ->setParameter(':filterVar', array_values($filterVal))
            ->getQuery()
            ->getResult();
        }
        return $queryBuilder->select('c')
        ->from(Cours::class, 'c')
        ->orderBy('c.titre','Asc')
        ->getQuery()
        ->getResult();
    }
    

//    /**
//     * @return Cours[] Returns an array of Cours objects
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

//    public function findOneBySomeField($value): ?Cours
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
