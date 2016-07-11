<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

class IssledovanieTypeRepository extends EntityRepository
{
    //показываем подкатегории
    public function showPodKat($parentId)
    {
        return $this->getEntityManager()
            ->createQuery('
                SELECT it.id, it.name FROM AppBundle:IssledovanieType it     
                WHERE it.parent = :parentId
            ')
            ->setParameter('parentId', $parentId)
            ->getResult();
    }  
}