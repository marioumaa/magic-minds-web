<?php

namespace App\Repository;

use App\Entity\questionFiras;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<questionFiras>
 *
 * @method questionFiras|null find($id, $lockMode = null, $lockVersion = null)
 * @method questionFiras|null findOneBy(array $criteria, array $orderBy = null)
 * @method questionFiras[]    findAll()
 * @method questionFiras[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class QuestionFirasRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, questionFiras::class);
    }

    public function save(questionFiras $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(questionFiras $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function findQuestionsWithMoreThanFiveLikes(): array
    {
        return $this->createQueryBuilder('q')
            ->andWhere('q.like > :like')
            ->setParameter('like', 5)
            ->getQuery()
            ->getResult();
    }
}
