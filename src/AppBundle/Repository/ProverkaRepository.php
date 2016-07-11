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
class ProverkaRepository extends EntityRepository
{
    
    public function proverkaAll($id, $date)
    {
        return $this->getEntityManager()
            ->createQuery('
                SELECT p.id, p.nomer, p.date, n.otmetka_ustraneniya, count(n.proverka) FROM AppBundle:Proverka p
                LEFT JOIN p.proverka_narushenie n
                WHERE p.organization = :id and YEAR(p.date) = :date
                GROUP BY p.id, n.otmetka_ustraneniya
            ')
            ->setParameter('id', $id)
            ->setParameter('date', $date)
            ->getResult();
    }  
    
    public function proverkaIds($id, $date)
    {
        return $this->getEntityManager()
            ->createQuery('
                SELECT p.id, p.date FROM AppBundle:Proverka p
                WHERE p.organization = :id and YEAR(p.date) = :date
            ')
            ->setParameter('id', $id)
            ->setParameter('date', $date)
            ->getResult();
    }   
    
    public function proverkiDates($id)
    {
        return $this->getEntityManager()
            ->createQuery('
                SELECT DISTINCT(YEAR(p.date)) FROM AppBundle:Proverka p
                JOIN p.organization org
                WHERE p.organization = :id
				GROUP BY p.date
            ')
            ->setParameter('id', $id)
            ->getResult();
    } 
    
    public function allTypesProverka()
    {
        return $this->getEntityManager()
            ->createQuery('
                SELECT p.name FROM AppBundle:ProverkaType p
                ORDER BY p.planovost DESC
            ')
            ->getResult();
    }  
    
    //проверки сгруппированные по организации и типу
    public function proverki($dateOt, $dateDo)
    {
        return $this->getEntityManager()
            ->createQuery('
                SELECT org.name_full, t.name, t.planovost, count(p.id) FROM AppBundle:Proverka p
                JOIN p.proverkaType t
                JOIN p.organization org
                WHERE p.date >= :dateOt and p.date <= :dateDo
                GROUP BY org.id, t.name
                ORDER BY t.planovost DESC
            ')
            ->setParameter('dateOt', $dateOt)
            ->setParameter('dateDo', $dateDo)
            ->getResult();
    }

    //кол-во нарушений по организации и типу
    public function narusheniya($dateOt, $dateDo)
    {
        return $this->getEntityManager()
            ->createQuery('
                SELECT org.id, org.name_full, t.name, t.planovost, n.otmetka_ustraneniya, count(n.id) FROM AppBundle:Proverka p
                JOIN p.proverkaType t
                JOIN p.proverka_narushenie n
                JOIN p.organization org
                WHERE p.date >= :dateOt and p.date <= :dateDo
                GROUP BY org.id, t.name, n.otmetka_ustraneniya
                ORDER BY org.id ASC
            ')
            ->setParameter('dateOt', $dateOt)
            ->setParameter('dateDo', $dateDo)
            ->getResult();
    }

    //кол-во нарушений по объекту и организации
    public function narusheniyaObj($dateOt, $dateDo)
    {
        return $this->getEntityManager()
            ->createQuery('
                SELECT org.name_full, obj.name, count(n.id) FROM AppBundle:Proverka p
                JOIN p.proverka_narushenie n
                JOIN n.objects obj
                JOIN p.organization org       
                WHERE p.date >= :dateOt and p.date <= :dateDo                
                GROUP BY org.id, obj.name
            ')
            ->setParameter('dateOt', $dateOt)
            ->setParameter('dateDo', $dateDo)            
            ->getResult();
    }
    
    //кол-во нарушений по виду наказания
    public function nakazanieVid($vid)
    {
        return $this->getEntityManager()
            ->createQuery('
                SELECT org.name_full, count(pn.vid) FROM AppBundle:ProverkaNakazanie pn
                JOIN pn.proverka p
                JOIN p.organization org
                WHERE pn.vid = :vid            
                GROUP BY org.id
            ')
            ->setParameter('vid', $vid)
            ->getResult();
    }
    
    //кол-во нарушений по типу наказания
    public function nakazanieType($type)
    {
        return $this->getEntityManager()
            ->createQuery('
                SELECT org.name_full, count(pn.type) FROM AppBundle:ProverkaNakazanie pn
                JOIN pn.proverka p
                JOIN p.organization org
                WHERE pn.type = :type
                GROUP BY org.id
            ')
            ->setParameter('type', $type)
            ->getResult();
    }     
    
    //кол-во людей по нарушениям
    public function nakazaniePeople($podch)
    {
        return $this->getEntityManager()
            ->createQuery('
                SELECT org.name_full, count(pn.podchinennost) FROM AppBundle:ProverkaNakazanie pn
                JOIN pn.proverka p
                JOIN p.organization org
                WHERE pn.podchinennost = :podch            
                GROUP BY org.id
            ')
            ->setParameter('podch', $podch)
            ->getResult();
    } 
    
    //невыполненные нарушения в карточке учреждения
    public function proverkaNevyp($id, $date)
    {
        return $this->getEntityManager()
            ->createQuery('
                SELECT org.name_full, pn.description, pn.date_ustraneniya, pn.primechanie, pn.zatraty FROM AppBundle:Proverka p
                JOIN p.proverka_narushenie pn
                JOIN p.organization org
                WHERE org.id = :id and YEAR(pn.date_ustraneniya) = :date and (pn.otmetka_ustraneniya = 0 or pn.otmetka_ustraneniya = -1)            
            ')
            ->setParameter('id', $id)
            ->setParameter('date', $date)
            ->getResult();
    } 

    //невыполненные нарушения все
    public function proverkaNevypAll($dateOt, $dateDo)
    {
        return $this->getEntityManager()
            ->createQuery('
                SELECT org.name_short, o.name, pn.id, pn.description, pn.date_ustraneniya, pn.otmetka_ustraneniya, pn.primechanie, pn.zatraty FROM AppBundle:Proverka p
                JOIN p.proverka_narushenie pn
                JOIN p.organization org
                JOIN pn.objects o
                WHERE pn.date_ustraneniya >= :dateOt and pn.date_ustraneniya <= :dateDo and (pn.otmetka_ustraneniya = 0 or pn.otmetka_ustraneniya = -1)            
                GROUP BY org.id
            ')
            ->setParameter('dateOt', $dateOt)
            ->setParameter('dateDo', $dateDo)
            ->getResult();
    }

    //нарушения требующие особого внимания
    public function proverkaNarusheniyaVnimanie($dateOt, $dateDo)
    {
        return $this->getEntityManager()
            ->createQuery('
                SELECT org.name_short, o.name, pn.id, pn.description, pn.date_ustraneniya, pn.otmetka_ustraneniya, pn.primechanie, pn.zatraty FROM AppBundle:Proverka p
                JOIN p.proverka_narushenie pn
                JOIN p.organization org
                JOIN pn.objects o
                WHERE pn.date_ustraneniya >= :dateOt and pn.date_ustraneniya <= :dateDo and pn.vnimanie = 1           
                GROUP BY org.id
            ')
            ->setParameter('dateOt', $dateOt)
            ->setParameter('dateDo', $dateDo)
            ->getResult();
    }

    //наказания в карточке учреждения
    public function proverkaNakazaniya($id, $date)
    {
        return $this->getEntityManager()
            ->createQuery('
                SELECT org.name_full, pn.nomer, pn.fio, pn.date, pn.dolgnost, pn.zvanie, pn.type, pn.podchinennost FROM AppBundle:Proverka p
                JOIN p.proverka_nakazanie pn
                JOIN p.organization org
                WHERE org.id = :id and YEAR(pn.date) = :date           
                ORDER BY pn.podchinennost DESC 
            ')
            ->setParameter('id', $id)
            ->setParameter('date', $date)
            ->getResult();
    }
    
    //наказания все
    public function proverkaNakazaniyaAll($dateOt, $dateDo)
    {
        return $this->getEntityManager()
            ->createQuery('
                SELECT org.name_short, pn.nomer, pn.fio, pn.date, pn.dolgnost, pn.zvanie, pn.type, pn.podchinennost FROM AppBundle:Proverka p
                JOIN p.proverka_nakazanie pn
                JOIN p.organization org
                WHERE pn.date >= :dateOt and pn.date <= :dateDo   
                GROUP BY org.id    
                ORDER BY pn.podchinennost DESC 
            ')
            ->setParameter('dateOt', $dateOt)
            ->setParameter('dateDo', $dateDo)            
            ->getResult();
    }  

    //для редактированиния нарушения
    public function proverkaEditNarusheniya($proverka_id)
    {
        return $this->getEntityManager()
            ->createQuery('
                SELECT pn.id, pn.description, pn.date_ustraneniya, o.name FROM AppBundle:Proverka p
                JOIN p.proverka_narushenie pn
				JOIN pn.objects o
                WHERE pn.proverka = :proverka_id       
            ')
            ->setParameter('proverka_id', $proverka_id)            
            ->getResult();
    }  
    //все нарушения по всем усреждениям
    public function narusheniyaAll ($dateOt, $dateDo)
    {
        return $this->getEntityManager()
            ->createQuery('
                SELECT org.name_short, pn.description, pn.date_ustraneniya, pn.otmetka_ustraneniya FROM AppBundle:Proverka p
                JOIN p.proverka_narushenie pn
                JOIN p.organization org       
                WHERE p.date >= :dateOt and p.date <= :dateDo                
                GROUP BY org.id, pn.id
            ')
            ->setParameter('dateOt', $dateOt)
            ->setParameter('dateDo', $dateDo)            
            ->getResult();
    }
    
    //все проверки в выбранный период
    public function proverkiAll($id, $dateOt, $dateDo)
    {
        return $this->getEntityManager()
            ->createQuery('
                SELECT p.id, p.nomer, p.date, p.kem_vydano FROM AppBundle:Proverka p
                WHERE p.organization = :id and p.date >= :dateOt and p.date <= :dateDo 
                GROUP BY p.id
            ')
            ->setParameter('id', $id)
            ->setParameter('dateOt', $dateOt)
            ->setParameter('dateDo', $dateDo)  
            ->getResult();
    }  
}
