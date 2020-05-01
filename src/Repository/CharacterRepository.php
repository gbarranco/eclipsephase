<?php

namespace App\Repository;

use App\Entity\Character;
use App\Entity\Player;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Character|null find($id, $lockMode = null, $lockVersion = null)
 * @method Character|null findOneBy(array $criteria, array $orderBy = null)
 * @method Character[]    findAll()
 * @method Character[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CharacterRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Character::class);
    }

    /**
     * @param Player $player
     *
     * @return Character[] Returns an array of Character objects by player id
     */
    public function findByPlayer(Player $player): ?array
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.Player = :player')
            ->setParameter(':player', $player)
            ->orderBy('c.characterName', 'ASC')
            ->getQuery()
            ->getResult()
        ;
    }
}
