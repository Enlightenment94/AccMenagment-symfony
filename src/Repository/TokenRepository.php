<?php

namespace App\Repository;

use App\Entity\Token;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class TokenRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Token::class);
    }

    public function findByPath($path)
    {
        return $this->getEntityManager()
            ->createQuery(
                'SELECT t FROM App\Entity\Token t WHERE t.path = :path'
            )
            ->setParameter('path', $path)
            ->getResult();
    }

    public function createToken($path,$userId)
    {
        $entityManager = $this->getEntityManager();

        $token = new Token();
        $token->setPath($path);
        $token->setUserId($userId);
        $token->setCreatedAt(new \DateTime());

        $entityManager->persist($token);
        $entityManager->flush();

        return $token;
    }

}