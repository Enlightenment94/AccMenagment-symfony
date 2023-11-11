<?php

namespace App\Repository;

use App\Entity\Confirm;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class ConfirmRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Confirm::class);
    }

    public function findAllOrderedById()
    {
        return $this->getEntityManager()
            ->createQuery(
                'SELECT c.userId, c.code, c.path FROM App\Entity\Confirm c '
            )
            ->getResult();
    }

    //Mało wydajne po id najlepiej ale do confirm moze byc, ze wzgledow bezpieczenstwa lepiej bo id nie bede przekazywal GET
    public function findByPath($path)
    {
        return $this->getEntityManager()
            ->createQuery(
                'SELECT c.userId, c.code, c.path FROM App\Entity\Confirm c WHERE c.path = :path'
            )
            ->setParameter('path', $path)
            ->getResult();
    }

    public function createConfirm($userId, $code, $path)
    {
        $em = $this->getEntityManager();
        $confirm = new Confirm();
        $confirm->setUserId($userId);
        $confirm->setCode($code);
        $confirm->setPath($path);
        $em->persist($confirm);
        $em->flush();

        return $confirm;
    }

    public function deleteByUserId(int $userId): void
    {
        $entityManager = $this->getEntityManager();
        $queryBuilder = $entityManager->createQueryBuilder();
        $queryBuilder->delete(Confirm::class, 'c')
            ->where('c.userId = :userId')
            ->setParameter('userId', $userId);

        $query = $queryBuilder->getQuery();
        $query->execute();
    }
}