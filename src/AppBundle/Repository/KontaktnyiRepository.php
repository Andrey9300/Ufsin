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
class KontaktnyiRepository extends EntityRepository
{
    public function is_kontakt($id, $fio, $date_birthday)
    {
        return $this->getEntityManager()
            ->createQuery('
                SELECT o.id, o.fio, o.date_birthday, o.place_progivaniya, o.date_viyavleniya, k.fio AS kfio, k.date_birthday AS kdate_birthday FROM AppBundle:kontaktnyi k
                JOIN k.osugdenyi o
                JOIN o.organization org
                WHERE org.id = :id and k.fio = :fio and k.date_birthday = :date_birthday
            ')
            ->setParameter('id', $id)
            ->setParameter('fio', $fio)
            ->setParameter('date_birthday', $date_birthday)
            ->getResult();
    }

    public function in_ochag($id, $fio, $date_birthday)
    {
        return $this->getEntityManager()
            ->createQuery('
                SELECT o.name, o.date, o.place, k.fio, k.date_birthday FROM AppBundle:kontaktnyi k
                JOIN k.ochag o
                JOIN o.organization org
                WHERE org.id = :id and k.fio = :fio and k.date_birthday = :date_birthday
            ')
            ->setParameter('id', $id)
            ->setParameter('fio', $fio)
            ->setParameter('date_birthday', $date_birthday)
            ->getResult();
    }     
}
