<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Table(name="soputpatol")
 * @ORM\Entity  
 */
class SoputPatol
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
    private $name;
    
    /**
     * @ORM\ManyToOne(targetEntity="Osugdenyi", inversedBy="soput_patol", cascade={"persist"})
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
     * Set name
     *
     * @param string $name
     *
     * @return SoputPatol
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
     * Set osugdenyi
     *
     * @param \AppBundle\Entity\Osugdenyi $osugdenyi
     *
     * @return SoputPatol
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
