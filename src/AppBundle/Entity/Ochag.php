<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Table(name="ochag")
 * @ORM\Entity 
 */
class Ochag
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
     * @ORM\Column(type="string")
     * @Assert\NotBlank()
     */        
    private $place; 
    
    /**
     * @ORM\Column(type="date", nullable=true)
     * @Assert\Date()
     */         
    private $date; 

    /**
     * @ORM\OneToMany(targetEntity="Osugdenyi", mappedBy="ochag", orphanRemoval=true, cascade={"persist"})
     */ 
    private $osugdenyi;
        
    /**
     * @ORM\OneToMany(targetEntity="Kontaktnyi", mappedBy="ochag", orphanRemoval=true, cascade={"persist"})
     */ 
    private $kontaktnyi;

    /**
     * @ORM\ManyToOne(targetEntity="Organization", inversedBy="ochag", cascade={"persist"})
     * @ORM\JoinColumn(name="organization_id", referencedColumnName="id")
     */ 
    private $organization;
 
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->osugdenyi = new \Doctrine\Common\Collections\ArrayCollection();
        $this->kontaktnyi = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Ochag
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
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Ochag
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
     * Add osugdenyi
     *
     * @param \AppBundle\Entity\Osugdenyi $osugdenyi
     *
     * @return Ochag
     */
    public function addOsugdenyus(\AppBundle\Entity\Osugdenyi $osugdenyi)
    {
        $this->osugdenyi[] = $osugdenyi;

        return $this;
    }

    /**
     * Remove osugdenyi
     *
     * @param \AppBundle\Entity\Osugdenyi $osugdenyi
     */
    public function removeOsugdenyus(\AppBundle\Entity\Osugdenyi $osugdenyi)
    {
        $this->osugdenyi->removeElement($osugdenyi);
    }

    /**
     * Get osugdenyi
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getOsugdenyi()
    {
        return $this->osugdenyi;
    }

    /**
     * Add kontaktnyi
     *
     * @param \AppBundle\Entity\Kontaktnyi $kontaktnyi
     *
     * @return Ochag
     */
    public function addKontaktnyus(\AppBundle\Entity\Kontaktnyi $kontaktnyi)
    {
        $this->kontaktnyi[] = $kontaktnyi;

        return $this;
    }

    /**
     * Remove kontaktnyi
     *
     * @param \AppBundle\Entity\Kontaktnyi $kontaktnyi
     */
    public function removeKontaktnyus(\AppBundle\Entity\Kontaktnyi $kontaktnyi)
    {
        $this->kontaktnyi->removeElement($kontaktnyi);
    }

    /**
     * Get kontaktnyi
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getKontaktnyi()
    {
        return $this->kontaktnyi;
    }

    /**
     * Set organization
     *
     * @param \AppBundle\Entity\Organization $organization
     *
     * @return Ochag
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
     * Add osugdenyi
     *
     * @param \AppBundle\Entity\Osugdenyi $osugdenyi
     *
     * @return Ochag
     */
    public function addOsugdenyi(\AppBundle\Entity\Osugdenyi $osugdenyi)
    {
        $this->osugdenyi[] = $osugdenyi;

        return $this;
    }

    /**
     * Remove osugdenyi
     *
     * @param \AppBundle\Entity\Osugdenyi $osugdenyi
     */
    public function removeOsugdenyi(\AppBundle\Entity\Osugdenyi $osugdenyi)
    {
        $this->osugdenyi->removeElement($osugdenyi);
    }

    /**
     * Add kontaktnyi
     *
     * @param \AppBundle\Entity\Kontaktnyi $kontaktnyi
     *
     * @return Ochag
     */
    public function addKontaktnyi(\AppBundle\Entity\Kontaktnyi $kontaktnyi)
    {
        $this->kontaktnyi[] = $kontaktnyi;

        return $this;
    }

    /**
     * Remove kontaktnyi
     *
     * @param \AppBundle\Entity\Kontaktnyi $kontaktnyi
     */
    public function removeKontaktnyi(\AppBundle\Entity\Kontaktnyi $kontaktnyi)
    {
        $this->kontaktnyi->removeElement($kontaktnyi);
    }

    /**
     * Set place
     *
     * @param string $place
     *
     * @return Ochag
     */
    public function setPlace($place)
    {
        $this->place = $place;

        return $this;
    }

    /**
     * Get place
     *
     * @return string
     */
    public function getPlace()
    {
        return $this->place;
    }
}
