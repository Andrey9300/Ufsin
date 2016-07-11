<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Table(name="rukovoditel")
 * @ORM\Entity
 */
class Rukovoditel
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
    private $fio;
    
    /**
     * @ORM\Column(type="string")
     * @Assert\NotBlank()
     */       
    private $zvanie;

    /**
     * @ORM\OneToOne(targetEntity="Organization", mappedBy="rukovoditel")
     */
    private $organization;
    
    /**
     * @ORM\OneToOne(targetEntity="Fkuz", mappedBy="rukovoditel")
     */
    private $fkuz;
    
    /**
     * @ORM\OneToMany(targetEntity="RukovoditelZamestitel", mappedBy="rukovoditel", cascade={"persist"})
     */
    private $rukovoditel_zamestitel;
 
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->rukovoditel_zamestitel = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set fio
     *
     * @param string $fio
     *
     * @return Rukovoditel
     */
    public function setFio($fio)
    {
        $this->fio = $fio;

        return $this;
    }

    /**
     * Get fio
     *
     * @return string
     */
    public function getFio()
    {
        return $this->fio;
    }

    /**
     * Set zvanie
     *
     * @param string $zvanie
     *
     * @return Rukovoditel
     */
    public function setZvanie($zvanie)
    {
        $this->zvanie = $zvanie;

        return $this;
    }

    /**
     * Get zvanie
     *
     * @return string
     */
    public function getZvanie()
    {
        return $this->zvanie;
    }

    /**
     * Set organization
     *
     * @param \AppBundle\Entity\Organization $organization
     *
     * @return Rukovoditel
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
     * Add rukovoditelZamestitel
     *
     * @param \AppBundle\Entity\RukovoditelZamestitel $rukovoditelZamestitel
     *
     * @return Rukovoditel
     */
    public function addRukovoditelZamestitel(\AppBundle\Entity\RukovoditelZamestitel $rukovoditelZamestitel)
    {
        $this->rukovoditel_zamestitel[] = $rukovoditelZamestitel;

        return $this;
    }

    public function addRukZam(RukovoditelZamestitel $rukovoditelZamestitel)
    {
        $rukovoditelZamestitel->addRuk($this);
        $this->rukovoditel_zamestitel->add($rukovoditelZamestitel);
    }
    
    /**
     * Remove rukovoditelZamestitel
     *
     * @param \AppBundle\Entity\RukovoditelZamestitel $rukovoditelZamestitel
     */
    public function removeRukovoditelZamestitel(\AppBundle\Entity\RukovoditelZamestitel $rukovoditelZamestitel)
    {
        $this->rukovoditel_zamestitel->removeElement($rukovoditelZamestitel);
    }

    /**
     * Get rukovoditelZamestitel
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getRukovoditelZamestitel()
    {
        return $this->rukovoditel_zamestitel;
    }

    /**
     * Set fkuz
     *
     * @param \AppBundle\Entity\Fkuz $fkuz
     * @return Rukovoditel
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
