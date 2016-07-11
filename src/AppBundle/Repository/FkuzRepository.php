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
class FkuzRepository extends EntityRepository
{
    public function dogovorFkuz()
    {
        return $this->getEntityManager()
            ->createQuery('
                SELECT d, dt FROM AppBundle:DogovorFkuz d
                JOIN d.fkuz f
                JOIN d.dogovorType dt
				ORDER BY d.date, d.dogovorType DESC
            ')
            ->getResult();
    }
	
    public function dogovorOnDate($date)
    {
        return $this->getEntityManager()
            ->createQuery('
                SELECT d, dt FROM AppBundle:DogovorFkuz d
                JOIN d.fkuz f
                JOIN d.dogovorType dt
				WHERE YEAR(d.date) = :date
				ORDER BY d.date, d.dogovorType DESC
            ')
			->setParameter('date', $date)
            ->getResult();
    } 
	
    public function dogovorDates()
    {
        return $this->getEntityManager()
            ->createQuery('
                SELECT DISTINCT(YEAR(d.date)) FROM AppBundle:DogovorFkuz d
                JOIN d.fkuz f
				GROUP BY d.date
            ')
            ->getResult();
    }   
    
    public function licenseOnDate($date)
    {
        return $this->getEntityManager()
            ->createQuery('
                SELECT l FROM AppBundle:License l
                JOIN l.fkuz f
				WHERE YEAR(l.date) = :date
				ORDER BY l.date DESC
            ')
			->setParameter('date', $date)
            ->getResult();
    } 
	
    public function licenseDates()
    {
        return $this->getEntityManager()
            ->createQuery('
                SELECT DISTINCT(YEAR(l.date)) FROM AppBundle:License l
                JOIN l.fkuz f
				GROUP BY l.date
            ')
            ->getResult();
    }

    public function licenses()
    {
        return $this->getEntityManager()
            ->createQuery('
                SELECT l FROM AppBundle:License l
                JOIN l.fkuz f
				ORDER BY l.date DESC
            ')
            ->getResult();
    }

    public function sanZaklOnDate($date)
    {
        return $this->getEntityManager()
            ->createQuery('
                SELECT s FROM AppBundle:SanZakl s
                JOIN s.fkuz f
				WHERE YEAR(s.date) = :date
				ORDER BY s.date DESC
            ')
			->setParameter('date', $date)
            ->getResult();
    } 
	
    public function sanZaklDates()
    {
        return $this->getEntityManager()
            ->createQuery('
                SELECT DISTINCT(YEAR(s.date)) FROM AppBundle:SanZakl s
                JOIN s.fkuz f
				GROUP BY s.date
            ')
            ->getResult();
    }

    public function sanZakls()
    {
        return $this->getEntityManager()
            ->createQuery('
                SELECT s FROM AppBundle:SanZakl s
                JOIN s.fkuz f
				ORDER BY s.date DESC
            ')
            ->getResult();
    }

    public function proverkaFkuz()
    {
        return $this->getEntityManager()
            ->createQuery('
                SELECT pf.id, pf.nomer, pf.date FROM AppBundle:ProverkaFkuz pf
                JOIN pf.fkuz f
				ORDER BY pf.date DESC
            ')
            ->getResult();
    }

    public function proverkaFkuzOnDate($date)
    {
        return $this->getEntityManager()
            ->createQuery('
                SELECT pf.id, pf.nomer, pf.date FROM AppBundle:ProverkaFkuz pf
                JOIN pf.fkuz f
                WHERE YEAR(pf.date) = :date
				ORDER BY pf.date DESC
            ')
            ->setParameter('date', $date)
            ->getResult();
    }

    public function proverkaFkuzDates()
    {
        return $this->getEntityManager()
            ->createQuery('
                SELECT DISTINCT(YEAR(pf.date)) FROM AppBundle:ProverkaFkuz pf
                JOIN pf.fkuz f
				GROUP BY pf.date
            ')
            ->getResult();
    }

    //наказания все
    public function proverkaNakazaniyaFkuzAll($id, $dateOt, $dateDo)
    {
        return $this->getEntityManager()
            ->createQuery('
                SELECT f.name_short, pn.nomer, pn.fio, pn.date, pn.dolgnost, pn.zvanie, pn.type, pn.podchinennost FROM AppBundle:ProverkaFkuz pf
                JOIN pf.proverkaNakazanieFkuz pn
                JOIN pf.fkuz f
                WHERE f.id = :id and pn.date >= :dateOt and pn.date <= :dateDo           
                ORDER BY pn.podchinennost DESC 
            ')
            ->setParameter('id', $id)
            ->setParameter('dateOt', $dateOt)
            ->setParameter('dateDo', $dateDo)
            ->getResult();
    }
}
