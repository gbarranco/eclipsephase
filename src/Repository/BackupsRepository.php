<?php

namespace App\Repository;

use App\Entity\Backups;
use App\Entity\Character;
use App\Entity\Player;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Backups|null find($id, $lockMode = null, $lockVersion = null)
 * @method Backups|null findOneBy(array $criteria, array $orderBy = null)
 * @method Backups[]    findAll()
 * @method Backups[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BackupsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Backups::class);
    }

    /**
     * @param Player $player
     *
     * @return Backups[] Returns an array of Backups objects by player id
     */
    public function findByPlayer(Player $player): ?array
    {
        return $this->createQueryBuilder('backup')
            ->join('backup.playableCharacter', 'character')
            ->andWhere('character.Player = :player')
            ->setParameter(':player', $player)
            ->orderBy('backup.id', 'DESC')
            ->getQuery()
            ->getResult()
            ;
    }
}
