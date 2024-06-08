<?php

namespace App\Repository;

use App\Entity\Commande;
use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Commande>
 *
 * @method Commande|null find($id, $lockMode = null, $lockVersion = null)
 * @method Commande|null findOneBy(array $criteria, array $orderBy = null)
 * @method Commande[]    findAll()
 * @method Commande[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CommandeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Commande::class);
    }
    public function findByUser(User $user): array
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.iduser = :val')
            ->setParameter('val', $user)
            ->orderBy('c.id', 'ASC')
            ->getQuery()
            ->getResult();
    }
    public function findByCommande($commandeId)
    {
        $entityManager = $this->getEntityManager();

        $query = $entityManager->createQuery(
            'SELECT p
        FROM App\Entity\Produit p
        INNER JOIN p.commandeProduit cp
        WHERE cp.commande = :commandeId'
        )->setParameter('commandeId', $commandeId);

        return $query->getResult();
    }

    public function searchByIdAndPrice($searchTerm, $price)
    {
        return $this->createQueryBuilder('c')
            ->where('c.id LIKE :searchTerm OR c.totalprice = :price')
            ->setParameter('searchTerm', '%'.$searchTerm.'%')
            ->setParameter('price', $price)
            ->getQuery()
            ->getResult();
    }
    // src/Repository/CommandeRepository.php



//    /**
//     * @return Commande[] Returns an array of Commande objects
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

//    public function findOneBySomeField($value): ?Commande
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
