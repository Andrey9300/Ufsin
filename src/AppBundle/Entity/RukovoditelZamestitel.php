<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Table(name="rukovoditelzamestitel")
 * @ORM\Entity
 */
class RukovoditelZamestitel
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
     * @ORM\Column(type="string")
     */       
    private $oblast_deaytelnosti;    

    /**
     * @ORM\ManyToOne(targetEntity="Rukovoditel", inversedBy="rukovoditel_zamestitel", cascade={"persist"})
     * @ORM\JoinColumn(name="rukovoditel_id", referencedColumnName="id")
     */
    private $rukovoditel;
    
    /**
     * Set id
     *
     * @param integer $id
     *
     * @return RukovoditelZamestitel
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
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
     * @return RukovoditelZamestitel
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
     * @return RukovoditelZamestitel
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
     * Set rukovoditel
     *
     * @param \AppBundle\Entity\Rukovoditel $rukovoditel
     *
     * @return RukovoditelZamestitel
     */
    public function setRukovoditel(\AppBundle\Entity\Rukovoditel $rukovoditel = null)
    {
        $this->rukovoditel = $rukovoditel;

        return $this;
    }

    /**
     * Get rukovoditel
     *
     * @return \AppBundle\Entity\Rukovoditel
     */
    public function getRukovoditel()
    {
        return $this->rukovoditel;
    }
    
    public function addRuk(Rukovoditel $rukovoditel)
    {
        if (!$this->rukovoditel->contains($rukovoditel)) {
            $this->rukovoditel->add($rukovoditel);
        }
    }

    /**
     * Set oblastDeaytelnosti
     *
     * @param string $oblastDeaytelnosti
     *
     * @return RukovoditelZamestitel
     */
    public function setOblastDeaytelnosti($oblastDeaytelnosti)
    {
        $this->oblast_deaytelnosti = $oblastDeaytelnosti;

        return $this;
    }

    /**
     * Get oblastDeaytelnosti
     *
     * @return string
     */
    public function getOblastDeaytelnosti()
    {
        return $this->oblast_deaytelnosti;
    }
}
