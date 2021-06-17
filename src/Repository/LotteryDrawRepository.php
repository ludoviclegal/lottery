<?php

namespace App\Repository;

use App\Entity\LotteryDraw;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method LotteryDraw|null find($id, $lockMode = null, $lockVersion = null)
 * @method LotteryDraw|null findOneBy(array $criteria, array $orderBy = null)
 * @method LotteryDraw[]    findAll()
 * @method LotteryDraw[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LotteryDrawRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, LotteryDraw::class);
    }

    // /**
    //  * @return LotteryDraw[] Returns an array of LotteryDraw objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('l.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?LotteryDraw
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
