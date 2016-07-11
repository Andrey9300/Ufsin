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
class OsugdenyiRepository extends EntityRepository
{
    public function countForMain($id, $date)
    {
        return $this->getEntityManager()
            ->createQuery('
                SELECT count(os.id) FROM AppBundle:Osugdenyi os
                WHERE os.organization = :id and YEAR(os.date_gospit) = :date
            ')
            ->setParameter('id', $id)
            ->setParameter('date', $date)
            ->getResult();
    }
    
    public function osugdenyiDates($id)
    {
        return $this->getEntityManager()
            ->createQuery('
                SELECT DISTINCT YEAR(o.date_gospit) FROM AppBundle:Osugdenyi o
                JOIN o.organization org
                WHERE o.organization = :id
                ORDER BY o.date_gospit ASC
            ')
            ->setParameter('id', $id)
            ->getResult();
    } 

    public function onOrganization($dateOt, $dateDo)
    {
        return $this->getEntityManager()
            ->createQuery('
                SELECT org.name_full, count(os.id) FROM AppBundle:Osugdenyi os
                JOIN os.organization org
                WHERE os.date_gospit >= :dateOt and os.date_gospit <= :dateDo
                GROUP BY org.id
            ')
            ->setParameter('dateOt', $dateOt)
            ->setParameter('dateDo', $dateDo)            
            ->getResult();
    }  

    public function kontaktnyeOnOrganization($dateOt, $dateDo)
    {
        return $this->getEntityManager()
            ->createQuery('
                SELECT org.name_full, count(k.id) FROM AppBundle:Kontaktnyi k
                JOIN k.osugdenyi os
                JOIN os.organization org
                WHERE os.date_gospit >= :dateOt and os.date_gospit <= :dateDo
                GROUP BY org.id
            ')
            ->setParameter('dateOt', $dateOt)
            ->setParameter('dateDo', $dateDo)             
            ->getResult();
    }     
    
    public function is_ill($id, $fio, $date_birthday)
    {
        return $this->getEntityManager()
            ->createQuery('
                SELECT o.id, o.fio, o.date_birthday, o.place_progivaniya, o.date_gospit FROM AppBundle:Osugdenyi o
                JOIN o.organization org
                WHERE org.id = :id and o.fio = :fio and o.date_birthday = :date_birthday
            ')
            ->setParameter('id', $id)
            ->setParameter('fio', $fio)
            ->setParameter('date_birthday', $date_birthday)
            ->getResult();
    } 
    
    //все осужденные с названием учреждения в выбранный период
    public function allWithNameOrg($dateOt, $dateDo)
    {
        return $this->getEntityManager()
            ->createQuery('
                SELECT o.id, o.fio, o.date_birthday, o.place_progivaniya, org.name_short FROM AppBundle:Osugdenyi o
                JOIN o.organization org
                WHERE o.date_gospit >= :dateOt and o.date_gospit <= :dateDo
                ORDER BY org.id 
            ')
            ->setParameter('dateOt', $dateOt)
            ->setParameter('dateDo', $dateDo)  
            ->getResult();
    }   

    //по организациям и отрядам
    public function orgProgivaniya($dateOt, $dateDo)
    {
        return $this->getEntityManager()
            ->createQuery('
                SELECT org.name_full, os.place_progivaniya, count(os.id) FROM AppBundle:Osugdenyi os
                JOIN os.organization org
                WHERE os.date_gospit >= :dateOt and os.date_gospit <= :dateDo
                GROUP BY org.id, os.place_progivaniya
            ')
            ->setParameter('dateOt', $dateOt)
            ->setParameter('dateDo', $dateDo)             
            ->getResult();
    }  

    //контактные по организациям и отрядам
    public function kontaktnyeOrgProgivaniya($dateOt, $dateDo)
    {
        return $this->getEntityManager()
            ->createQuery('
                SELECT org.name_full, os.place_progivaniya, count(k.id) FROM AppBundle:Kontaktnyi k
                JOIN k.osugdenyi os
                JOIN os.organization org
                WHERE os.date_gospit >= :dateOt and os.date_gospit <= :dateDo
                GROUP BY org.id, os.place_progivaniya
            ')
            ->setParameter('dateOt', $dateOt)
            ->setParameter('dateDo', $dateDo)             
            ->getResult();
    } 
    
    //по мбт
    public function mbt($dateOt, $dateDo)
    {
        return $this->getEntityManager()
            ->createQuery('
                SELECT org.name_full, os.mbt, count(os.id) FROM AppBundle:Osugdenyi os
                JOIN os.organization org
                WHERE os.date_gospit >= :dateOt and os.date_gospit <= :dateDo
                GROUP BY org.id, os.mbt
            ')
            ->setParameter('dateOt', $dateOt)
            ->setParameter('dateDo', $dateDo)             
            ->getResult();
    }  
    
    //по выявлению
    public function viyavlenie($dateOt, $dateDo)
    {
        return $this->getEntityManager()
            ->createQuery('
                SELECT org.name_full, os.viyavlen, count(os.id) FROM AppBundle:Osugdenyi os
                JOIN os.organization org
                WHERE os.date_gospit >= :dateOt and os.date_gospit <= :dateDo
                GROUP BY org.id, os.viyavlen
            ')
            ->setParameter('dateOt', $dateOt)
            ->setParameter('dateDo', $dateDo)             
            ->getResult();
    }
    
    //по заболеваемости
    public function recidiv($dateOt, $dateDo)
    {
        return $this->getEntityManager()
            ->createQuery('
                SELECT org.name_full, os.recidiv, count(os.id) FROM AppBundle:Osugdenyi os
                JOIN os.organization org
                WHERE os.date_gospit >= :dateOt and os.date_gospit <= :dateDo
                GROUP BY org.id, os.recidiv
            ')
            ->setParameter('dateOt', $dateOt)
            ->setParameter('dateDo', $dateDo)             
            ->getResult();
    }  
    
    //по поступлению из
    public function postupilIs($dateOt, $dateDo)
    {
        return $this->getEntityManager()
            ->createQuery('
                SELECT org.name_full, os.postupil_iz, count(os.id) FROM AppBundle:Osugdenyi os
                JOIN os.organization org
                WHERE os.date_gospit >= :dateOt and os.date_gospit <= :dateDo
                GROUP BY org.id, os.postupil_iz
            ')
            ->setParameter('dateOt', $dateOt)
            ->setParameter('dateDo', $dateDo)             
            ->getResult();
    }   
    
    //по общему адресу
    public function addressCommon($dateOt, $dateDo)
    {
        return $this->getEntityManager()
            ->createQuery('
                SELECT org.name_full, os.address_common, count(os.id) FROM AppBundle:Osugdenyi os
                JOIN os.organization org
                WHERE os.date_gospit >= :dateOt and os.date_gospit <= :dateDo
                GROUP BY org.id, os.postupil_iz
            ')
            ->setParameter('dateOt', $dateOt)
            ->setParameter('dateDo', $dateDo)             
            ->getResult();
    }  
    
    //по очагу
    public function ochag($dateOt, $dateDo)
    {
        return $this->getEntityManager()
            ->createQuery('
                SELECT org.name_full, o.id AS ochag_id, count(os.id) FROM AppBundle:Osugdenyi os
                JOIN os.organization org
                JOIN os.ochag o
                WHERE os.ochag IS NOT NULL and os.date_gospit >= :dateOt and os.date_gospit <= :dateDo
                GROUP BY org.id, os.ochag
            ')
            ->setParameter('dateOt', $dateOt)
            ->setParameter('dateDo', $dateDo)             
            ->getResult();
    }  
    
    //по сопутствующей патолоии
    public function patologiya($dateOt, $dateDo)
    {
        return $this->getEntityManager()
            ->createQuery('
                SELECT org.name_full, sp.name, count(os.id) FROM AppBundle:Osugdenyi os
                JOIN os.organization org
                JOIN os.soput_patol sp
                WHERE os.date_gospit >= :dateOt and os.date_gospit <= :dateDo
                GROUP BY org.id, sp.name
            ')
            ->setParameter('dateOt', $dateOt)
            ->setParameter('dateDo', $dateDo)             
            ->getResult();
    }     

    public function onOrganizationPovtornye($dateOt, $dateDo)
    {
        return $this->getEntityManager()
            ->createQuery('
                SELECT org.name_full, count(os.id) AS count_os FROM AppBundle:Osugdenyi os
                JOIN os.organization org
                WHERE os.date_gospit >= :dateOt and os.date_gospit <= :dateDo
                GROUP BY org.id, os.fio, os.date_birthday
                HAVING count_os > 1
            ')
            ->setParameter('dateOt', $dateOt)
            ->setParameter('dateDo', $dateDo)             
            ->getResult();
    }    
    
    public function onOrganizationIzKontaktnyh($dateOt, $dateDo)
    {
        return $this->getEntityManager()
            ->createQuery('
                SELECT org.name_full, count(os.id) FROM AppBundle:Osugdenyi os
                JOIN os.organization org
                WHERE os.is_kontakt = 1 and os.date_gospit >= :dateOt and os.date_gospit <= :dateDo
                GROUP BY org.id
            ')
            ->setParameter('dateOt', $dateOt)
            ->setParameter('dateDo', $dateDo)             
            ->getResult();
    }      
    
    public function allOchags($dateOt, $dateDo)
    {
        return $this->getEntityManager()
            ->createQuery('
                SELECT o.id, o.name, o.place, o.date FROM AppBundle:Ochag o
                WHERE o.date >= :dateOt and o.date <= :dateDo
            ')
            ->setParameter('dateOt', $dateOt)
            ->setParameter('dateDo', $dateDo)             
            ->getResult();
    }  
}
