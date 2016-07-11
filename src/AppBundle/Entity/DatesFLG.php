<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Table(name="datesflg")
 * @ORM\Entity 
 */
class DatesFLG
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
    private $result;
    
    /**
     * @ORM\Column(type="date", nullable=true)
     * @Assert\Date()
     */         
    private $date;
    
    /**
     * @ORM\ManyToOne(targetEntity="Osugdenyi", inversedBy="datesFLG", cascade={"persist"})
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
     * Set result
     *
     * @param string $result
     *
     * @return DatesFLG
     */
    public function setResult($result)
    {
        $this->result = $result;

        return $this;
    }

    /**
     * Get result
     *
     * @return string
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return DatesFLG
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
     * Set osugdenyi
     *
     * @param \AppBundle\Entity\Osugdenyi $osugdenyi
     *
     * @return DatesFLG
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
}
