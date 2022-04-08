<?php

namespace App\Repository;

use App\Entity\LoginGrupoPermissoes;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method LoginGrupoPermissoes|null find($id, $lockMode = null, $lockVersion = null)
 * @method LoginGrupoPermissoes|null findOneBy(array $criteria, array $orderBy = null)
 * @method LoginGrupoPermissoes[]    findAll()
 * @method LoginGrupoPermissoes[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LoginGrupoPermissoesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, LoginGrupoPermissoes::class);
    }

    // /**
    //  * @return LoginGrupoPermissoes[] Returns an array of LoginGrupoPermissoes objects
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
    public function findOneBySomeField($value): ?LoginGrupoPermissoes
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
