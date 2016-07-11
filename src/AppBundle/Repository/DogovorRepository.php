<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * This custom Doctrine repository contains some methods which are useful when
 * querying for blog post information.
 * See http://symfony.com/doc/current/book/doctrine.html#custom-repository-classes
 *
 * @author Ryan Weaver <weaverryan@gmail.com>
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
class DogovorRepository extends EntityRepository
{
    public function dogovorForMain($id, $date)
    {
        return $this->getEntityManager()
            ->createQuery('
                SELECT d.nomer, d.date, d.organization_posrednik, d.summa, dt.name FROM AppBundle:Dogovor d
                JOIN d.organization org
                JOIN d.dogovorType dt
				WHERE org.id = :id and YEAR(d.date) = :date
				ORDER BY d.date, d.dogovorType DESC
            ')
			->setParameter('id', $id)
			->setParameter('date', $date)
            ->getResult();
    } 
    
    public function onOrganization($dateOt, $dateDo)
    {
        return $this->getEntityManager()
            ->createQuery('
                SELECT org.name_full, t.name FROM AppBundle:dogovor d
                JOIN d.dogovorType t
                JOIN d.organization org
                WHERE d.date >= :dateOt and d.date <= :dateDo 
                GROUP BY org.id, t.name
            ')
            ->setParameter('dateOt', $dateOt)
            ->setParameter('dateDo', $dateDo)
            ->getResult();
    }  
    
    public function onObjects($obj_id, $type_id)
    {
        return $this->getEntityManager()
            ->createQuery('
                SELECT DISTINCT org.name_short FROM AppBundle:dogovor d
                JOIN d.dogovorType t
                JOIN d.dogovor_objects do
                JOIN d.organization org
                WHERE do.id = :obj_id and t.id = :type_id
            ')
            ->setParameter('obj_id', $obj_id)
            ->setParameter('type_id', $type_id)
            ->getResult();
    }  
        
    public function dogovorDates($id)
    {
        return $this->getEntityManager()
            ->createQuery('
                SELECT DISTINCT(YEAR(d.date)) FROM AppBundle:Dogovor d
                JOIN d.organization org
                WHERE d.organization = :id
				GROUP BY d.date
            ')
            ->setParameter('id', $id)
            ->getResult();
    }
    
    //все договора за выбранный период    
    public function dogovorAll($id, $dateOt, $dateDo)
    {
        return $this->getEntityManager()
            ->createQuery('
                SELECT d.id, d.nomer, d.date, d.organization_posrednik, d.summa, dt.name FROM AppBundle:Dogovor d
                JOIN d.dogovorType dt 
                JOIN d.organization org
                WHERE d.organization = :id and d.date >= :dateOt and d.date <= :dateDo
            ')
            ->setParameter('id', $id)
            ->setParameter('dateOt', $dateOt)
            ->setParameter('dateDo', $dateDo)
            ->getResult();
    }      
}
