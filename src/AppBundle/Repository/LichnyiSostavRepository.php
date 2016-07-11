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
class LichnyiSostavRepository extends EntityRepository
{
    public function countForMain($id, $date)
    {
        return $this->getEntityManager()
            ->createQuery('
                SELECT count(ls.id) FROM AppBundle:lichnyiSostav ls
                WHERE ls.organization = :id and YEAR(ls.data_extr_izv) = :date
            ')
            ->setParameter('id', $id)
            ->setParameter('date', $date)
            ->getResult();
    }
     
    public function lichnyiSostavDates($id)
    {
        return $this->getEntityManager()
            ->createQuery('
                SELECT DISTINCT YEAR(l.data_extr_izv) FROM AppBundle:LichnyiSostav l
                JOIN l.organization org
                WHERE l.organization = :id
                ORDER BY l.data_extr_izv ASC
            ')
            ->setParameter('id', $id)
            ->getResult();
    }
       
    public function onOrganization($dateOt, $dateDo)
    {
        return $this->getEntityManager()
            ->createQuery('
                SELECT org.name_full, count(ls.id) FROM AppBundle:lichnyiSostav ls
                JOIN ls.organization org
                WHERE ls.data_extr_izv >= :dateOt and ls.data_extr_izv <= :dateDo
                GROUP BY org.id
            ')
            ->setParameter('dateOt', $dateOt)
            ->setParameter('dateDo', $dateDo)            
            ->getResult();
    }
        
    //все больные личного состава в выбранный период
    public function allLichnyiSostav($dateOt, $dateDo)
    {
        return $this->getEntityManager()
            ->createQuery('
                SELECT ls.id, ls.fio, ls.date_birthday FROM AppBundle:LichnyiSostav ls
                WHERE ls.data_extr_izv >= :dateOt and ls.data_extr_izv <= :dateDo
            ')
            ->setParameter('dateOt', $dateOt)
            ->setParameter('dateDo', $dateDo)  
            ->getResult();
    }   
    
}
