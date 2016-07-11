<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Table(name="Proverkanakazanie")
 * @ORM\Entity
 */
class ProverkaNakazanie
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */       
    private $id;
    
    /**
     * @ORM\ManyToOne(targetEntity="Proverka", inversedBy="proverka_nakazanie", cascade={"persist"})
     * @ORM\JoinColumn(name="proverka_id", referencedColumnName="id")
     */
    private $proverka;

    /**
     * @ORM\Column(type="string")
     * @Assert\NotBlank()
     */       
    private $nomer;
    
    /**
     * @ORM\Column(type="date", nullable=true)
     * @Assert\Date()
     */     
    private $date;
    
    /**
     * @ORM\Column(type="string")
     * @Assert\NotBlank()
     */       
    private $fio;
    
    /**
     * @ORM\Column(type="string")
     * @Assert\NotBlank()
     */       
    private $dolgnost;
    
    /**
     * @ORM\Column(type="string")
     * @Assert\NotBlank()
     */       
    private $zvanie;
    
    /**
     * @ORM\Column(type="string")
     * @Assert\NotBlank()
     */       
    private $type; 
    
    /**
     * @ORM\Column(type="string")
     * @Assert\NotBlank()
     */       
    private $vid;
    
    /**
     * @ORM\Column(type="string")
     * @Assert\NotBlank()
     */       
    private $podchinennost;
    
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
     * Set name
     *
     * @param string $name
     *
     * @return ProverkaNakazanie
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set fio
     *
     * @param string $fio
     *
     * @return ProverkaNakazanie
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
     * Set proverka
     *
     * @param \AppBundle\Entity\Proverka $proverka
     *
     * @return ProverkaNakazanie
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
    
    public function addNak(Proverka $proverka)
    {
        if (!$this->id_proverka->contains($proverka)) {
            $this->id_proverka->add($proverka);
        }
    }

    /**
     * Set nomer
     *
     * @param string $nomer
     *
     * @return ProverkaNakazanie
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
     * @return ProverkaNakazanie
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
     * Set dolgnost
     *
     * @param string $dolgnost
     *
     * @return ProverkaNakazanie
     */
    public function setDolgnost($dolgnost)
    {
        $this->dolgnost = $dolgnost;

        return $this;
    }

    /**
     * Get dolgnost
     *
     * @return string
     */
    public function getDolgnost()
    {
        return $this->dolgnost;
    }

    /**
     * Set zvanie
     *
     * @param string $zvanie
     *
     * @return ProverkaNakazanie
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
     * Set type
     *
     * @param string $type
     *
     * @return ProverkaNakazanie
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set vid
     *
     * @param string $vid
     *
     * @return ProverkaNakazanie
     */
    public function setVid($vid)
    {
        $this->vid = $vid;

        return $this;
    }

    /**
     * Get vid
     *
     * @return string
     */
    public function getVid()
    {
        return $this->vid;
    }

    /**
     * Set podchinennost
     *
     * @param string $podchinennost
     *
     * @return ProverkaNakazanie
     */
    public function setPodchinennost($podchinennost)
    {
        $this->podchinennost = $podchinennost;

        return $this;
    }

    /**
     * Get podchinennost
     *
     * @return string
     */
    public function getPodchinennost()
    {
        return $this->podchinennost;
    }
}
