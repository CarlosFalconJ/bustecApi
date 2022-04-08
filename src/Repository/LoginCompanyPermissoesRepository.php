<?php

namespace App\Repository;

use App\Entity\LoginCompanyPermissoes;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method LoginCompanyPermissoes|null find($id, $lockMode = null, $lockVersion = null)
 * @method LoginCompanyPermissoes|null findOneBy(array $criteria, array $orderBy = null)
 * @method LoginCompanyPermissoes[]    findAll()
 * @method LoginCompanyPermissoes[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LoginCompanyPermissoesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, LoginCompanyPermissoes::class);
    }

    // /**
    //  * @return LoginCompanyPermissoes[] Returns an array of LoginCompanyPermissoes objects
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
    public function findOneBySomeField($value): ?LoginCompanyPermissoes
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
