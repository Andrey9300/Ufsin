<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Table(name="License")
 * @ORM\Entity
 */
class License
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
    private $vidDeytelnosti;
	
    /**
     * @ORM\ManyToOne(targetEntity="Fkuz", inversedBy="license", cascade={"persist"})
     * @ORM\JoinColumn(name="fkuz_id", referencedColumnName="id")
     */
    private $fkuz;    


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
     * @return License
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
     * @return License
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
     * Set vidDeytelnosti
     *
     * @param string $vidDeytelnosti
     * @return License
     */
    public function setVidDeytelnosti($vidDeytelnosti)
    {
        $this->vidDeytelnosti = $vidDeytelnosti;

        return $this;
    }

    /**
     * Get vidDeytelnosti
     *
     * @return string 
     */
    public function getVidDeytelnosti()
    {
        return $this->vidDeytelnosti;
    }

    /**
     * Set fkuz
     *
     * @param \AppBundle\Entity\Fkuz $fkuz
     * @return License
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
}
