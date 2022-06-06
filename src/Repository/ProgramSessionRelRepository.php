<?php

namespace App\Repository;

use App\Entity\ProgramSessionRel;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ProgramSessionRel>
 *
 * @method ProgramSessionRel|null find($id, $lockMode = null, $lockVersion = null)
 * @method ProgramSessionRel|null findOneBy(array $criteria, array $orderBy = null)
 * @method ProgramSessionRel[]    findAll()
 * @method ProgramSessionRel[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProgramSessionRelRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ProgramSessionRel::class);
    }

    public function add(ProgramSessionRel $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ProgramSessionRel $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return ProgramSessionRel[] Returns an array of ProgramSessionRel objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('p.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?ProgramSessionRel
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
