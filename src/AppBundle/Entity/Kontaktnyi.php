<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Table(name="kontaktnyi")
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="AppBundle\Repository\KontaktnyiRepository")   
 */
class Kontaktnyi
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
     * @ORM\Column(type="date", nullable=true)
     * @Assert\Date()
     */        
    private $date_birthday;
    
    /**
     * @ORM\ManyToOne(targetEntity="Ochag",  inversedBy="kontaktnyi", cascade={"persist"})
     * @ORM\JoinColumn(name="ochag_id", referencedColumnName="id")     
     */
    private $ochag;
    
    /**
     * @ORM\ManyToOne(targetEntity="Osugdenyi", inversedBy="kontaktnyi", cascade={"persist"})
     * @ORM\JoinColumn(name="osugdenyi_id", referencedColumnName="id")
     */
    private $osugdenyi;    

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
     * @return Kontaktnyi
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
     * Set dateBirthday
     *
     * @param \DateTime $dateBirthday
     *
     * @return Kontaktnyi
     */
    public function setDateBirthday($dateBirthday)
    {
        $this->date_birthday = date_create_from_format('j.m.Y', $dateBirthday);

        return $this;
    }

    /**
     * Get dateBirthday
     *
     * @return \DateTime
     */
    public function getDateBirthday()
    {
        return $this->date_birthday;
    }

    /**
     * Set osugdenyi
     *
     * @param \AppBundle\Entity\Osugdenyi $osugdenyi
     *
     * @return Kontaktnyi
     */
    public function setOsugdenyi(\AppBundle\Entity\Osugdenyi $osugdenyi = null)
    {
        $this->osugdenyi = $osugdenyi;

        return $this;
    }

    /**
     * Get osugdenyi
     *
     * @return \AppBundle\Entity\Osugdenyi
     */
    public function getOsugdenyi()
    {
        return $this->osugdenyi;
    }
    
    public function addKon(Osugdenyi $osugdenyi)
    {
        if (!$this->osugdenyi->contains($osugdenyi)) {
            $this->osugdenyi->add($osugdenyi);
        }
    }    

    /**
     * Set ochag
     *
     * @param \AppBundle\Entity\Ochag $ochag
     *
     * @return Kontaktnyi
     */
    public function setOchag(\AppBundle\Entity\Ochag $ochag = null)
    {
        $this->ochag = $ochag;

        return $this;
    }

    /**
     * Get ochag
     *
     * @return \AppBundle\Entity\Ochag
     */
    public function getOchag()
    {
        return $this->ochag;
    }
}
