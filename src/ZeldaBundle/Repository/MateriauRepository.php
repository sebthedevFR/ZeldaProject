<?php

namespace ZeldaBundle\Repository;

/**
 * MateriauRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class MateriauRepository extends \Doctrine\ORM\EntityRepository
{
    public function lesAutresMateriaux($id)
    {
        $qb = $this->createQueryBuilder('p')
            ->select('p')
            ->where('p.id != :id')
            ->setMaxResults(6)
            ->orderBy('p.laCategorieMateriau')
            ->setParameter("id", $id);
        return $qb->getQuery()->getResult();
    }
}
