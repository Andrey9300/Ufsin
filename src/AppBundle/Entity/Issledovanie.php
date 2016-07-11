<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Table(name="issledovanie")
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="AppBundle\Repository\IssledovanieRepository") 
 */
class Issledovanie
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
    private $nomer;

    /**
     * @ORM\Column(type="date")
     * @Assert\Date()
     */
    private $date;
    
    /**
     * @ORM\Column(type="integer")
     * @Assert\NotBlank()
     */         
    private $all_count;
    
    /**
     * @ORM\Column(type="integer", options={"default":0})
     * @Assert\NotBlank()
     */         
    private $ne_sootv;

    /**
     * @ORM\OneToMany(targetEntity="PokazatelsIssledovaniya", mappedBy="issledovanie", orphanRemoval=true, cascade={"persist"})
     */
    private $pokazatelsIssledovaniy;
    
    /**
     * @ORM\ManyToOne(targetEntity="Organization", inversedBy="issledovanie", cascade={"persist"})
     * @ORM\JoinColumn(name="organization_id", referencedColumnName="id")
     */
    private $organization;
    
    /**
     * @ORM\ManyToOne(targetEntity="IssledovanieType", inversedBy="issledovanie", cascade={"persist"})
     * @ORM\JoinColumn(name="issledovanieType_id", referencedColumnName="id")
     */   
    private $issledovanieType;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->pokazatelsIssledovaniy = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set nomer
     *
     * @param string $nomer
     *
     * @return Issledovanie
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
     * @return Issledovanie
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
     * Set allCount
     *
     * @param integer $allCount
     *
     * @return Issledovanie
     */
    public function setAllCount($allCount)
    {
        $this->all_count = $allCount;

        return $this;
    }

    /**
     * Get allCount
     *
     * @return integer
     */
    public function getAllCount()
    {
        return $this->all_count;
    }

    /**
     * Set neSootv
     *
     * @param integer $neSootv
     *
     * @return Issledovanie
     */
    public function setNeSootv($neSootv)
    {
        $this->ne_sootv = $neSootv;

        return $this;
    }

    /**
     * Get neSootv
     *
     * @return integer
     */
    public function getNeSootv()
    {
        return $this->ne_sootv;
    }

    /**
     * Set organization
     *
     * @param \AppBundle\Entity\Organization $organization
     *
     * @return Issledovanie
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
     * Add pokazatelsIssledovaniy
     *
     * @param \AppBundle\Entity\PokazatelsIssledovaniya $pokazatelsIssledovaniy
     *
     * @return Issledovanie
     */
    public function addPokazatelsIssledovaniy(\AppBundle\Entity\PokazatelsIssledovaniya $pokazatelsIssledovaniy)
    {
        $this->pokazatelsIssledovaniy[] = $pokazatelsIssledovaniy;

        return $this;
    }

    /**
     * Remove pokazatelsIssledovaniy
     *
     * @param \AppBundle\Entity\PokazatelsIssledovaniya $pokazatelsIssledovaniy
     */
    public function removePokazatelsIssledovaniy(\AppBundle\Entity\PokazatelsIssledovaniya $pokazatelsIssledovaniy)
    {
        $this->pokazatelsIssledovaniy->removeElement($pokazatelsIssledovaniy);
    }

    /**
     * Get pokazatelsIssledovaniy
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPokazatelsIssledovaniy()
    {
        return $this->pokazatelsIssledovaniy;
    }

    /**
     * Set issledovanieType
     *
     * @param \AppBundle\Entity\IssledovanieType $issledovanieType
     *
     * @return Issledovanie
     */
    public function setIssledovanieType(\AppBundle\Entity\IssledovanieType $issledovanieType = null)
    {
        $this->issledovanieType = $issledovanieType;

        return $this;
    }

    /**
     * Get issledovanieType
     *
     * @return \AppBundle\Entity\IssledovanieType
     */
    public function getIssledovanieType()
    {
        return $this->issledovanieType;
    }

    public function addPokazatels(PokazatelsIssledovaniya $pokazatelsIssledovaniya)
    {
        $pokazatelsIssledovaniya->addIssledovanie($this);
        $this->pokazatelsIssledovaniy->add($pokazatelsIssledovaniya);
    }
}
