<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Table(name="dogovor")
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="AppBundle\Repository\DogovorRepository")  
 */
class Dogovor
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */  
    private $id;    
    
    /**
     * @ORM\Column(type="string")
     * @Assert\NotBlank()     
     */    
    private $nomer;
    
    /**
     * @ORM\Column(type="date")
     * @Assert\Date()
     */ 
    private $date;
    
    /**
     * @ORM\Column(type="string")
     * @Assert\NotBlank()
     */
    private $organization_posrednik;
    
    /**
     * @ORM\Column(type="integer", nullable=true)
     * @Assert\NotBlank()     
     */        
    private $summa;
    
    /**
     * @ORM\ManyToMany(targetEntity="Objects", inversedBy="dogovor_id", cascade={"persist"})
     * @ORM\JoinTable(name="dogovor_objects")
     */     
    private $dogovor_objects;

    /**
     * @ORM\ManyToOne(targetEntity="Organization", inversedBy="dogovor")
     * @ORM\JoinColumn(name="organization_id", referencedColumnName="id")
     */
    private $organization;
    
    /**
     * @ORM\ManyToOne(targetEntity="DogovorType", inversedBy="dogovor", cascade={"persist"})
     * @ORM\JoinColumn(name="dogovor_type_id", referencedColumnName="id")
     */     
    private $dogovorType;   

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->dogovor_objects = new \Doctrine\Common\Collections\ArrayCollection();
        $this->dogovor_type_id = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * Set nomer
     *
     * @param integer $nomer
     *
     * @return Dogovor
     */
    public function setNomer($nomer)
    {
        $this->nomer = $nomer;

        return $this;
    }

    /**
     * Get nomer
     *
     * @return integer
     */
    public function getNomer()
    {
        return $this->nomer;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Dogovor
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set organizationPosrednik
     *
     * @param string $organizationPosrednik
     *
     * @return Dogovor
     */
    public function setOrganizationPosrednik($organizationPosrednik)
    {
        $this->organization_posrednik = $organizationPosrednik;

        return $this;
    }

    /**
     * Get organizationPosrednik
     *
     * @return string
     */
    public function getOrganizationPosrednik()
    {
        return $this->organization_posrednik;
    }

    /**
     * Set summa
     *
     * @param integer $summa
     *
     * @return Dogovor
     */
    public function setSumma($summa)
    {
        $this->summa = $summa;

        return $this;
    }

    /**
     * Get summa
     *
     * @return integer
     */
    public function getSumma()
    {
        return $this->summa;
    }

    /**
     * Add dogovorObject
     *
     * @param \AppBundle\Entity\Objects $dogovorObject
     *
     * @return Dogovor
     */
    public function addDogovorObject(\AppBundle\Entity\Objects $dogovorObject)
    {
        $this->dogovor_objects[] = $dogovorObject;

        return $this;
    }

    /**
     * Remove dogovorObject
     *
     * @param \AppBundle\Entity\Objects $dogovorObject
     */
    public function removeDogovorObject(\AppBundle\Entity\Objects $dogovorObject)
    {
        $this->dogovor_objects->removeElement($dogovorObject);
    }

    /**
     * Get dogovorObjects
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDogovorObjects()
    {
        return $this->dogovor_objects;
    }

    /**
     * Set organization
     *
     * @param \AppBundle\Entity\Organization $organization
     *
     * @return Dogovor
     */
    public function setOrganization(\AppBundle\Entity\Organization $organization = null)
    {
        $this->organization = $organization;

        return $this;
    }

    /**
     * Get organization
     *
     * @return \AppBundle\Entity\Organization
     */
    public function getOrganization()
    {
        return $this->organization;
    }

    /**
     * Add dogovorTypeId
     *
     * @param \AppBundle\Entity\DogovorType $dogovorTypeId
     *
     * @return Dogovor
     */
    public function addDogovorTypeId(\AppBundle\Entity\DogovorType $dogovorTypeId)
    {
        $this->dogovor_type_id[] = $dogovorTypeId;

        return $this;
    }

    /**
     * Remove dogovorTypeId
     *
     * @param \AppBundle\Entity\DogovorType $dogovorTypeId
     */
    public function removeDogovorTypeId(\AppBundle\Entity\DogovorType $dogovorTypeId)
    {
        $this->dogovor_type_id->removeElement($dogovorTypeId);
    }

    /**
     * Get dogovorTypeId
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDogovorTypeId()
    {
        return $this->dogovor_type_id;
    }

    /**
     * Set dogovorTypeId
     *
     * @param \AppBundle\Entity\DogovorType $dogovorTypeId
     *
     * @return Dogovor
     */
    public function setDogovorTypeId(\AppBundle\Entity\DogovorType $dogovorTypeId = null)
    {
        $this->dogovor_type_id = $dogovorTypeId;

        return $this;
    }

    /**
     * Set dogovorType
     *
     * @param \AppBundle\Entity\DogovorType $dogovorType
     *
     * @return Dogovor
     */
    public function setDogovorType(\AppBundle\Entity\DogovorType $dogovorType = null)
    {
        $this->dogovorType = $dogovorType;

        return $this;
    }

    /**
     * Get dogovorType
     *
     * @return \AppBundle\Entity\DogovorType
     */
    public function getDogovorType()
    {
        return $this->dogovorType;
    }

    /**
     * Add object
     *
     * @param \AppBundle\Entity\Objects $object
     *
     * @return Dogovor
     */
    public function addObject(\AppBundle\Entity\Objects $object)
    {
        $this->objects[] = $object;

        return $this;
    }

    /**
     * Remove object
     *
     * @param \AppBundle\Entity\Objects $object
     */
    public function removeObject(\AppBundle\Entity\Objects $object)
    {
        $this->objects->removeElement($object);
    }

    /**
     * Get objects
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getObjects()
    {
        return $this->objects;
    }
}
