<?php

namespace AppBundle\Entity;

/**
 * AttributesRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class AttributesRepository extends \Doctrine\ORM\EntityRepository
{
	public function findAllAttributes()
    {
        return $this->getEntityManager()
        			->createQuery('SELECT a FROM AppBundle:Attributes a ORDER BY a.id DESC')
            		->getResult();
    }
}