<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Table(name="dogovorobjects")
 * @ORM\Entity
 */
class DogovorObjects
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */ 
    private $id;
    
    /**
     * @ORM\ManyToOne(targetEntity="OrganizationObject")
     * @ORM\JoinColumn(nullable=false)
     */   
    private $id_organization_object;

    /**
     * @ORM\ManyToOne(targetEntity="Dogovor")
     * @ORM\JoinColumn(nullable=false)
     */    
    private $id_dogovor;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set idOrganizationObject
     *
     * @param \AppBundle\Entity\OrganizationObject $idOrganizationObject
     *
     * @return DogovorObjects
     */
    public function setIdOrganizationObject(\AppBundle\Entity\OrganizationObject $idOrganizationObject)
    {
        $this->id_organization_object = $idOrganizationObject;

        return $this;
    }

    /**
     * Get idOrganizationObject
     *
     * @return \AppBundle\Entity\OrganizationObject
     */
    public function getIdOrganizationObject()
    {
        return $this->id_organization_object;
    }

    /**
     * Set idDogovor
     *
     * @param \AppBundle\Entity\Dogovor $idDogovor
     *
     * @return DogovorObjects
     */
    public function setIdDogovor(\AppBundle\Entity\Dogovor $idDogovor)
    {
        $this->id_dogovor = $idDogovor;

        return $this;
    }

    /**
     * Get idDogovor
     *
     * @return \AppBundle\Entity\Dogovor
     */
    public function getIdDogovor()
    {
        return $this->id_dogovor;
    }
}
