<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Table(name="DogovorFkuz")
 * @ORM\Entity
 */
class DogovorFkuz
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
     * @ORM\ManyToOne(targetEntity="Fkuz", inversedBy="dogovorFkuz")
     * @ORM\JoinColumn(name="fkuz_id", referencedColumnName="id")
     */
    private $fkuz;
    
    /**
     * @ORM\ManyToOne(targetEntity="DogovorType", inversedBy="dogovorFkuz", cascade={"persist"})
     * @ORM\JoinColumn(name="dogovor_type_id", referencedColumnName="id")
     */     
    private $dogovorType;   

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
     * @param string $nomer
     *
     * @return DogovorFkuz
     */
    public function setNomer($nomer)
    {
        $this->nomer = $nomer;

        return $this;
    }

    /**
     * Get nomer
     *
     * @return string
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
     * @return DogovorFkuz
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
     * @return DogovorFkuz
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
     * @return DogovorFkuz
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
     * Set fkuz
     *
     * @param \AppBundle\Entity\Fkuz $fkuz
     *
     * @return DogovorFkuz
     */
    public function setFkuz(\AppBundle\Entity\Fkuz $fkuz = null)
    {
        $this->fkuz = $fkuz;

        return $this;
    }

    /**
     * Get fkuz
     *
     * @return \AppBundle\Entity\Fkuz
     */
    public function getFkuz()
    {
        return $this->fkuz;
    }

    /**
     * Set dogovorType
     *
     * @param \AppBundle\Entity\DogovorType $dogovorType
     *
     * @return DogovorFkuz
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
}
