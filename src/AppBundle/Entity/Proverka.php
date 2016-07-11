<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Table(name="Proverka")
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ProverkaRepository")  
 */
class Proverka
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */  
    private $id;

    /**
     * @ORM\Column(type="date")
     * @Assert\Date()
     */     
    private $date;

    /**
     * @ORM\Column(type="string")
     * @Assert\NotBlank()
     */      
    private $nomer;
    
    /**
     * @ORM\Column(type="date", nullable=true)
     * @Assert\Date()
     */     
    private $date_rasporyageniya;
    
    /**
     * @ORM\Column(type="date", nullable=true)
     * @Assert\Date()
     */     
    private $date_akt;

    /**
     * @ORM\Column(type="date", nullable=true)
     * @Assert\Date()
     */     
    private $date_predpisaniya;

    /**
     * @ORM\Column(type="string")
     * @Assert\NotBlank()
     */      
    private $kem_vydano;
    
    /**
     * @ORM\ManyToOne(targetEntity="Organization", inversedBy="proverka", cascade={"persist"})
     * @ORM\JoinColumn(name="organization_id", referencedColumnName="id")
     */   
    private $organization;

    /**
     * @ORM\ManyToOne(targetEntity="ProverkaType", inversedBy="proverka", cascade={"persist"})
     * @ORM\JoinColumn(name="proverka_type_id", referencedColumnName="id")
     */  
    private $proverkaType;

    /**
     * @ORM\OneToMany(targetEntity="ProverkaNarushenie", mappedBy="proverka", orphanRemoval=true, cascade={"persist"})
     */
    private $proverka_narushenie;
    
    /**
     * @ORM\OneToMany(targetEntity="ProverkaNakazanie", mappedBy="proverka", orphanRemoval=true, cascade={"persist"})
     */
    private $proverka_nakazanie;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->proverka_narushenie = new \Doctrine\Common\Collections\ArrayCollection();
        $this->proverka_nakazanie = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Proverka
     */
    public function setDate($date = null)
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
     * Set nomer
     *
     * @param integer $nomer
     *
     * @return Proverka
     */
    public function setNomer($nomer)
    {
        $this->nomer = $nomer;

        return $this;
    }

    /**
     * Get nomer
     *
     * @return integer
     */
    public function getNomer()
    {
        return $this->nomer;
    }

    /**
     * Set dateRasporyageniya
     *
     * @param \DateTime $dateRasporyageniya
     *
     * @return Proverka
     */
    public function setDateRasporyageniya($dateRasporyageniya)
    {
        $this->date_rasporyageniya = $dateRasporyageniya;
        
        return $this;
    }

    /**
     * Get dateRasporyageniya
     *
     * @return \DateTime
     */
    public function getDateRasporyageniya()
    {
        return $this->date_rasporyageniya;
    }

    /**
     * Set dateAkt
     *
     * @param \DateTime $dateAkt
     *
     * @return Proverka
     */
    public function setDateAkt($dateAkt)
    {
        $this->date_akt = $dateAkt;

        return $this;
    }

    /**
     * Get dateAkt
     *
     * @return \DateTime
     */
    public function getDateAkt()
    {
        return $this->date_akt;
    }

    /**
     * Set datePredpisaniya
     *
     * @param \DateTime $datePredpisaniya
     *
     * @return Proverka
     */
    public function setDatePredpisaniya($datePredpisaniya)
    {
        $this->date_predpisaniya = $datePredpisaniya;

        return $this;
    }

    /**
     * Get datePredpisaniya
     *
     * @return \DateTime
     */
    public function getDatePredpisaniya()
    {
        return $this->date_predpisaniya;
    }

    /**
     * Set kemVydano
     *
     * @param string $kemVydano
     *
     * @return Proverka
     */
    public function setKemVydano($kemVydano)
    {
        $this->kem_vydano = $kemVydano;

        return $this;
    }

    /**
     * Get kemVydano
     *
     * @return string
     */
    public function getKemVydano()
    {
        return $this->kem_vydano;
    }

    /**
     * Set organizationId
     *
     * @param integer $organizationId
     *
     * @return Proverka
     */
    public function setOrganizationId($organizationId)
    {
        $this->organization_id = $organizationId;

        return $this;
    }

    /**
     * Get organizationId
     *
     * @return integer
     */
    public function getOrganizationId()
    {
        return $this->organization_id;
    }

    /**
     * Set proverkaTypeId
     *
     * @param integer $proverkaTypeId
     *
     * @return Proverka
     */
    public function setProverkaTypeId($proverkaTypeId)
    {
        $this->proverka_type_id = $proverkaTypeId;

        return $this;
    }

    /**
     * Get proverkaTypeId
     *
     * @return integer
     */
    public function getProverkaTypeId()
    {
        return $this->proverka_type_id;
    }

    /**
     * Set organization
     *
     * @param \AppBundle\Entity\Organization $organization
     *
     * @return Proverka
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
     * Set proverkaType
     *
     * @param \AppBundle\Entity\ProverkaType $proverkaType
     *
     * @return Proverka
     */
    public function setProverkaType(\AppBundle\Entity\ProverkaType $proverkaType = null)
    {
        $this->proverkaType = $proverkaType;

        return $this;
    }

    /**
     * Get proverkaType
     *
     * @return \AppBundle\Entity\ProverkaType
     */
    public function getProverkaType()
    {
        return $this->proverkaType;
    }

    /**
     * Add proverkaNarushenie
     *
     * @param \AppBundle\Entity\ProverkaNarushenie $proverkaNarushenie
     *
     * @return Proverka
     */
    public function addProverkaNarushenie(\AppBundle\Entity\ProverkaNarushenie $proverkaNarushenie)
    {
        $this->proverka_narushenie[] = $proverkaNarushenie;

        return $this;
    }
    
    public function addNarushenie(ProverkaNarushenie $proverkaNarushenie)
    {
        $proverkaNarushenie->addNar($this);
        $this->proverka_narushenie->add($proverkaNarushenie);
    }
    /**
     * Remove proverkaNarushenie
     *
     * @param \AppBundle\Entity\ProverkaNarushenie $proverkaNarushenie
     */
    public function removeProverkaNarushenie(\AppBundle\Entity\ProverkaNarushenie $proverkaNarushenie)
    {
        $this->proverka_narushenie->removeElement($proverkaNarushenie);
    }

    /**
     * Get proverkaNarushenie
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getProverkaNarushenie()
    {
        return $this->proverka_narushenie;
    }

    /**
     * Add proverkaNakazanie
     *
     * @param \AppBundle\Entity\ProverkaNakazanie $proverkaNakazanie
     *
     * @return Proverka
     */
    public function addProverkaNakazanie(\AppBundle\Entity\ProverkaNakazanie $proverkaNakazanie)
    {
        $this->proverka_nakazanie[] = $proverkaNakazanie;

        return $this;
    }

    public function addNakazanie(ProverkaNakazanie $proverkaNakazanie)
    {
        $proverkaNakazanie->addNak($this);
        $this->proverka_nakazanie->add($proverkaNakazanie);
    }
    /**
     * Remove proverkaNakazanie
     *
     * @param \AppBundle\Entity\ProverkaNakazanie $proverkaNakazanie
     */
    public function removeProverkaNakazanie(\AppBundle\Entity\ProverkaNakazanie $proverkaNakazanie)
    {
        $this->proverka_nakazanie->removeElement($proverkaNakazanie);
    }

    /**
     * Get proverkaNakazanie
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getProverkaNakazanie()
    {
        return $this->proverka_nakazanie;
    }
}
