<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Table(name="Proverkanarushenie")
 * @ORM\Entity
 */
class ProverkaNarushenie
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */       
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="Proverka", inversedBy="proverka_narushenie", cascade={"persist"})
     * @ORM\JoinColumn(name="proverka_id", referencedColumnName="id")
     */
    private $proverka;
   
    /**
     * @ORM\ManyToOne(targetEntity="Objects", inversedBy="proverkanarushenie", cascade={"persist"})
     * @ORM\JoinColumn(name="object_id", referencedColumnName="id", nullable=false)
     */     
    private $objects;

    /**
     * @ORM\Column(type="string")
     * @Assert\NotBlank()
     */      
    private $description;

    /**
     * @ORM\Column(type="date", nullable=true)
     * @Assert\Date()
     */      
    private $date_ustraneniya;

    /**
     * @ORM\Column(type="string")
     * @Assert\NotBlank()
     */      
    private $otmetka_ustraneniya;
    
    /**
     * @ORM\Column(type="string")
     * @Assert\NotBlank()
     */      
    private $zatraty;
    
    /**
     * @ORM\Column(type="string", nullable=true)
     * @Assert\NotBlank()
     */      
    private $primechanie;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     * @Assert\NotBlank()
     */      
    private $vnimanie;
	
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
     * Set description
     *
     * @param string $description
     *
     * @return ProverkaNarushenie
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set dateUstraneniya
     *
     * @param \DateTime $dateUstraneniya
     *
     * @return ProverkaNarushenie
     */
    public function setDateUstraneniya($dateUstraneniya)
    {
        $this->date_ustraneniya = $dateUstraneniya;

        return $this;
    }

    /**
     * Get dateUstraneniya
     *
     * @return \DateTime
     */
    public function getDateUstraneniya()
    {
        return $this->date_ustraneniya;
    }

    /**
     * Set otmetkaUstraneniya
     *
     * @param string $otmetkaUstraneniya
     *
     * @return ProverkaNarushenie
     */
    public function setOtmetkaUstraneniya($otmetkaUstraneniya)
    {
        $this->otmetka_ustraneniya = $otmetkaUstraneniya;

        return $this;
    }

    /**
     * Get otmetkaUstraneniya
     *
     * @return string
     */
    public function getOtmetkaUstraneniya()
    {
        return $this->otmetka_ustraneniya;
    }

    /**
     * Set primechanie
     *
     * @param string $primechanie
     *
     * @return ProverkaNarushenie
     */
    public function setPrimechanie($primechanie)
    {
        $this->primechanie = $primechanie;

        return $this;
    }

    /**
     * Get primechanie
     *
     * @return string
     */
    public function getPrimechanie()
    {
        return $this->primechanie;
    }

    /**
     * Set proverka
     *
     * @param \AppBundle\Entity\Proverka $proverka
     *
     * @return ProverkaNarushenie
     */
    public function setProverka(\AppBundle\Entity\Proverka $proverka)
    {
        $this->proverka = $proverka;

        return $this;
    }

    /**
     * Get proverka
     *
     * @return \AppBundle\Entity\Proverka
     */
    public function getProverka()
    {
        return $this->proverka;
    }

    /**
     * Set idOrganizationObject
     *
     * @param \AppBundle\Entity\Objects $idOrganizationObject
     *
     * @return ProverkaNarushenie
     */
    public function setIdOrganizationObject(\AppBundle\Entity\Objects $idOrganizationObject)
    {
        $this->id_organization_object = $idOrganizationObject;

        return $this;
    }

    /**
     * Get idOrganizationObject
     *
     * @return \AppBundle\Entity\Objects
     */
    public function getIdOrganizationObject()
    {
        return $this->id_organization_object;
    }
    
    public function addNar(Proverka $proverka)
    {
        if (!$this->id_proverka->contains($proverka)) {
            $this->id_proverka->add($proverka);
        }
    }


    /**
     * Set zatraty
     *
     * @param string $zatraty
     *
     * @return ProverkaNarushenie
     */
    public function setZatraty($zatraty)
    {
        $this->zatraty = $zatraty;

        return $this;
    }

    /**
     * Get zatraty
     *
     * @return string
     */
    public function getZatraty()
    {
        return $this->zatraty;
    }

    /**
     * Set objects
     *
     * @param \AppBundle\Entity\Objects $objects
     *
     * @return ProverkaNarushenie
     */
    public function setObjects(\AppBundle\Entity\Objects $objects)
    {
        $this->objects = $objects;

        return $this;
    }

    /**
     * Get objects
     *
     * @return \AppBundle\Entity\Objects
     */
    public function getObjects()
    {
        return $this->objects;
    }

    /**
     * Set objectsOrg
     *
     * @param \AppBundle\Entity\Objects $objectsOrg
     *
     * @return ProverkaNarushenie
     */
    public function setObjectsOrg(\AppBundle\Entity\Objects $objectsOrg)
    {
        $this->objects_org = $objectsOrg;

        return $this;
    }

    /**
     * Get objectsOrg
     *
     * @return \AppBundle\Entity\Objects
     */
    public function getObjectsOrg()
    {
        return $this->objects_org;
    }

    /**
     * Set vnimanie
     *
     * @param boolean $vnimanie
     * @return ProverkaNarushenie
     */
    public function setVnimanie($vnimanie)
    {
        $this->vnimanie = $vnimanie;

        return $this;
    }

    /**
     * Get vnimanie
     *
     * @return boolean 
     */
    public function getVnimanie()
    {
        return $this->vnimanie;
    }
}
