<?php

namespace App\Repository;

use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<User>
 *
 * @method User|null find($id, $lockMode = null, $lockVersion = null)
 * @method User|null findOneBy(array $criteria, array $orderBy = null)
 * @method User[]    findAll()
 * @method User[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UserRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, User::class);
    }
    public function totalUser(): int {
        return $this->createQueryBuilder('u')
            ->select('COUNT(u.id)')
            ->getQuery()
            ->getSingleScalarResult();
    }


    public function findByEmail(string $email): ?User
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.email = :email')
            ->setParameter('email', $email)
            ->getQuery()
            ->getOneOrNullResult();
    }

    public function totalGender($gender):int{
        return $this->createQueryBuilder('u')
            ->select('COUNT(u.id) as count')
            ->where('u.gender = :gender')
            ->setParameter('gender', $gender)
            ->getQuery()
            ->getSingleScalarResult();
    }
    public function search($mots){
        $query = $this->createQueryBuilder('u');
        if($mots != null){
            $query->andWhere('MATCH_AGAINST (u.firstName,u.lastName,u.email) AGAINST 
            (:mots boolean)>0')
                ->setParameter('mots','%'.$mots.'%');

        }
        return $query->getQuery()->getResult();
    }
//    /**
//     * @return User[] Returns an array of User objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('u')
//            ->andWhere('u.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('u.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?User
//    {
//        return $this->createQueryBuilder('u')
//            ->andWhere('u.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }

    public function findByRole(string $role): array
    {


        return $this->createQueryBuilder('u')
            ->where('u.roles LIKE :role')
            ->setParameter('role','%'.$role.'%')
            ->getQuery()
            ->getResult();
    }
}
