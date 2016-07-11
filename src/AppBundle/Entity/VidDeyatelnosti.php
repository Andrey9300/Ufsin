<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Table(name="viddeyatelnosti")
 * @ORM\Entity 
 */
class VidDeyatelnosti
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
     * @ORM\OneToMany(targetEntity="SanZakl", mappedBy="vidDeyatelnosti", cascade={"persist"})
     */    
    private $sanZakl;
    
    /**
     * @ORM\ManyToOne(targetEntity="Fkuz", inversedBy="vidDeyatelnosti", cascade={"persist"})
     * @ORM\JoinColumn(name="fkuz_id", referencedColumnName="id")
     */
    private $fkuz;    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->sanZakl = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set name
     *
     * @param string $name
     *
     * @return VidDeyatelnosti
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
     * Add sanZakl
     *
     * @param \AppBundle\Entity\SanZakl $sanZakl
     *
     * @return VidDeyatelnosti
     */
    public function addSanZakl(\AppBundle\Entity\SanZakl $sanZakl)
    {
        $this->sanZakl[] = $sanZakl;

        return $this;
    }

    /**
     * Remove sanZakl
     *
     * @param \AppBundle\Entity\SanZakl $sanZakl
     */
    public function removeSanZakl(\AppBundle\Entity\SanZakl $sanZakl)
    {
        $this->sanZakl->removeElement($sanZakl);
    }

    /**
     * Get sanZakl
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSanZakl()
    {
        return $this->sanZakl;
    }

    /**
     * Set fkuz
     *
     * @param \AppBundle\Entity\Fkuz $fkuz
     *
     * @return VidDeyatelnosti
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
