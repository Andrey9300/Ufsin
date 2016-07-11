<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Table(name="organization")
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="AppBundle\Repository\OrganizationRepository") 
 */
class Organization
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
    private $name_full;
    
    /**
     * @ORM\Column(type="string")
     * @Assert\NotBlank()
     */       
    private $name_short;
    
    /**
     * @ORM\Column(type="string")
     * @Assert\NotBlank()
     */       
    private $ur_address;
    
    /**
     * @ORM\Column(type="integer")
     * @Assert\NotBlank()
     */       
    private $position;       
    
    /**
     * @ORM\OneToOne(targetEntity="OrganizationMCH", inversedBy="organization", cascade={"persist"})
     * @ORM\JoinColumn(name="organization_MCH_id", referencedColumnName="id")
     */
    private $organizationMCH;
    
    /**
     * @ORM\OneToOne(targetEntity="Rukovoditel", inversedBy="organization", cascade={"persist"})
     * @ORM\JoinColumn(name="rukovoditel_id", referencedColumnName="id")
     */
    private $rukovoditel;

    /**
     * @ORM\OneToMany(targetEntity="LichnyiSostav", mappedBy="organization", cascade={"persist"})
     */ 
    private $lichnyisostav;    

   /**
     * @ORM\OneToMany(targetEntity="Osugdenyi", mappedBy="organization", orphanRemoval=true, cascade={"persist"})
     */ 
    private $osugdenyi; 
    
    /**
     * @ORM\OneToMany(targetEntity="Ochag", mappedBy="organization", orphanRemoval=true, cascade={"persist"})
     */ 
    private $ochag;    
    
    /**
     * @ORM\OneToMany(targetEntity="Issledovanie", mappedBy="organization", orphanRemoval=true, cascade={"persist"})
     */
    private $issledovanie;

    /**
     * @ORM\OneToMany(targetEntity="Proverka", mappedBy="organization", orphanRemoval=true, cascade={"persist"})
     */    
    private $proverka;    

    /**
     * @ORM\OneToMany(targetEntity="Dogovor", mappedBy="organization", orphanRemoval=true, cascade={"persist"})
     */
    private $dogovor;
    
    /**
     * @ORM\ManyToMany(targetEntity="Objects", inversedBy="organization_id", cascade={"persist"})
     * @ORM\JoinTable(name="organization_objects")
     */     
    private $objects;       

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->dogovor = new \Doctrine\Common\Collections\ArrayCollection();
        $this->objects = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Organization
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
     * Set urAddress
     *
     * @param string $urAddress
     *
     * @return Organization
     */
    public function setUrAddress($urAddress)
    {
        $this->ur_address = $urAddress;

        return $this;
    }

    /**
     * Get urAddress
     *
     * @return string
     */
    public function getUrAddress()
    {
        return $this->ur_address;
    }

    /**
     * Set organizationMCHId
     *
     * @param integer $organizationMCHId
     *
     * @return Organization
     */
    public function setOrganizationMCHId($organizationMCHId)
    {
        $this->organization_MCH_id = $organizationMCHId;

        return $this;
    }

    /**
     * Get organizationMCHId
     *
     * @return integer
     */
    public function getOrganizationMCHId()
    {
        return $this->organization_MCH_id;
    }

    /**
     * Set rukovoditelId
     *
     * @param integer $rukovoditelId
     *
     * @return Organization
     */
    public function setRukovoditelId($rukovoditelId)
    {
        $this->rukovoditel_id = $rukovoditelId;

        return $this;
    }

    /**
     * Get rukovoditelId
     *
     * @return integer
     */
    public function getRukovoditelId()
    {
        return $this->rukovoditel_id;
    }

    /**
     * Set organizationMCH
     *
     * @param \AppBundle\Entity\OrganizationMCH $organizationMCH
     *
     * @return Organization
     */
    public function setOrganizationMCH(\AppBundle\Entity\OrganizationMCH $organizationMCH = null)
    {
        $this->organizationMCH = $organizationMCH;

        return $this;
    }

    /**
     * Get organizationMCH
     *
     * @return \AppBundle\Entity\OrganizationMCH
     */
    public function getOrganizationMCH()
    {
        return $this->organizationMCH;
    }

    /**
     * Set rukovoditel
     *
     * @param \AppBundle\Entity\Rukovoditel $rukovoditel
     *
     * @return Organization
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

    /**
     * Set proverka
     *
     * @param \AppBundle\Entity\Proverka $proverka
     *
     * @return Organization
     */
    public function setProverka(\AppBundle\Entity\Proverka $proverka = null)
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

    /**
     * Add dogovor
     *
     * @param \AppBundle\Entity\Dogovor $dogovor
     *
     * @return Organization
     */
    public function addDogovor(\AppBundle\Entity\Dogovor $dogovor)
    {
        $this->dogovor[] = $dogovor;

        return $this;
    }

    /**
     * Remove dogovor
     *
     * @param \AppBundle\Entity\Dogovor $dogovor
     */
    public function removeDogovor(\AppBundle\Entity\Dogovor $dogovor)
    {
        $this->dogovor->removeElement($dogovor);
    }

    /**
     * Get dogovor
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDogovor()
    {
        return $this->dogovor;
    }

    /**
     * Add object
     *
     * @param \AppBundle\Entity\Objects $object
     *
     * @return Organization
     */
    public function addObject(\AppBundle\Entity\Objects $object)
    {
        $this->objects[] = $object;

        return $this;
    }

    /**
     * Remove object
     *
     * @param \AppBundle\Entity\Objects $object
     */
    public function removeObject(\AppBundle\Entity\Objects $object)
    {
        $this->objects->removeElement($object);
    }

    /**
     * Get objects
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getObjects()
    {
        return $this->objects;
    }

    /**
     * Add proverka
     *
     * @param \AppBundle\Entity\Proverka $proverka
     *
     * @return Organization
     */
    public function addProverka(\AppBundle\Entity\Proverka $proverka)
    {
        $this->proverka[] = $proverka;

        return $this;
    }

    /**
     * Remove proverka
     *
     * @param \AppBundle\Entity\Proverka $proverka
     */
    public function removeProverka(\AppBundle\Entity\Proverka $proverka)
    {
        $this->proverka->removeElement($proverka);
    }

    /**
     * Set lichnyisostav
     *
     * @param \AppBundle\Entity\LichnyiSostav $lichnyisostav
     *
     * @return Organization
     */
    public function setLichnyisostav(\AppBundle\Entity\LichnyiSostav $lichnyisostav = null)
    {
        $this->lichnyisostav = $lichnyisostav;

        return $this;
    }

    /**
     * Get lichnyisostav
     *
     * @return \AppBundle\Entity\LichnyiSostav
     */
    public function getLichnyisostav()
    {
        return $this->lichnyisostav;
    }

    /**
     * Set osugdenyi
     *
     * @param \AppBundle\Entity\Osugdenyi $osugdenyi
     *
     * @return Organization
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

    /**
     * Add lichnyisostav
     *
     * @param \AppBundle\Entity\LichnyiSostav $lichnyisostav
     *
     * @return Organization
     */
    public function addLichnyisostav(\AppBundle\Entity\LichnyiSostav $lichnyisostav)
    {
        $this->lichnyisostav[] = $lichnyisostav;

        return $this;
    }

    /**
     * Remove lichnyisostav
     *
     * @param \AppBundle\Entity\LichnyiSostav $lichnyisostav
     */
    public function removeLichnyisostav(\AppBundle\Entity\LichnyiSostav $lichnyisostav)
    {
        $this->lichnyisostav->removeElement($lichnyisostav);
    }

    /**
     * Add osugdenyi
     *
     * @param \AppBundle\Entity\Osugdenyi $osugdenyi
     *
     * @return Organization
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
     * Set nameFull
     *
     * @param string $nameFull
     *
     * @return Organization
     */
    public function setNameFull($nameFull)
    {
        $this->name_full = $nameFull;

        return $this;
    }

    /**
     * Get nameFull
     *
     * @return string
     */
    public function getNameFull()
    {
        return $this->name_full;
    }

    /**
     * Set nameShort
     *
     * @param string $nameShort
     *
     * @return Organization
     */
    public function setNameShort($nameShort)
    {
        $this->name_short = $nameShort;

        return $this;
    }

    /**
     * Get nameShort
     *
     * @return string
     */
    public function getNameShort()
    {
        return $this->name_short;
    }

    /**
     * Add ochag
     *
     * @param \AppBundle\Entity\Ochag $ochag
     *
     * @return Organization
     */
    public function addOchag(\AppBundle\Entity\Ochag $ochag)
    {
        $this->ochag[] = $ochag;

        return $this;
    }

    /**
     * Remove ochag
     *
     * @param \AppBundle\Entity\Ochag $ochag
     */
    public function removeOchag(\AppBundle\Entity\Ochag $ochag)
    {
        $this->ochag->removeElement($ochag);
    }

    /**
     * Get ochag
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getOchag()
    {
        return $this->ochag;
    }

    /**
     * Set position
     *
     * @param string $position
     *
     * @return Organization
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Get position
     *
     * @return string
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Add issledovanie
     *
     * @param \AppBundle\Entity\Issledovanie $issledovanie
     *
     * @return Organization
     */
    public function addIssledovanie(\AppBundle\Entity\Issledovanie $issledovanie)
    {
        $this->issledovanie[] = $issledovanie;

        return $this;
    }

    /**
     * Remove issledovanie
     *
     * @param \AppBundle\Entity\Issledovanie $issledovanie
     */
    public function removeIssledovanie(\AppBundle\Entity\Issledovanie $issledovanie)
    {
        $this->issledovanie->removeElement($issledovanie);
    }

    /**
     * Get issledovanie
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIssledovanie()
    {
        return $this->issledovanie;
    }
}
