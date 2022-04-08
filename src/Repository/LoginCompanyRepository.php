<?php

namespace App\Repository;

use App\Entity\LoginCompany;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method LoginCompany|null find($id, $lockMode = null, $lockVersion = null)
 * @method LoginCompany|null findOneBy(array $criteria, array $orderBy = null)
 * @method LoginCompany[]    findAll()
 * @method LoginCompany[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LoginCompanyRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, LoginCompany::class);
    }

    // /**
    //  * @return LoginCompany[] Returns an array of LoginCompany objects
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
    public function findOneBySomeField($value): ?LoginCompany
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
