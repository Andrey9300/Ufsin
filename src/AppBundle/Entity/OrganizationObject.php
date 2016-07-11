<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Table(name="organizationobject")
 * @ORM\Entity
 */
class OrganizationObject
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */    
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="Organization")
     * @ORM\JoinColumn(nullable=false)
     */       
    private $id_organization;

    /**
     * @ORM\Column(type="string")
     * @Assert\NotBlank()
     */        
    private $name;
    
    /**
     * @ORM\Column(type="integer")
     * @Assert\NotBlank()
     */        
    private $kolvo_sotrudnikov;
    
    /**
     * @ORM\OneToMany(
     *      targetEntity="ProverkaNarushenie",
     *      mappedBy="id_organization_object",
     *      orphanRemoval=true
     * )
     */
    private $Proverka_narushenie;     
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->Proverka_narushenie = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return OrganizationObject
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
     * Set kolvoSotrudnikov
     *
     * @param integer $kolvoSotrudnikov
     *
     * @return OrganizationObject
     */
    public function setKolvoSotrudnikov($kolvoSotrudnikov)
    {
        $this->kolvo_sotrudnikov = $kolvoSotrudnikov;

        return $this;
    }

    /**
     * Get kolvoSotrudnikov
     *
     * @return integer
     */
    public function getKolvoSotrudnikov()
    {
        return $this->kolvo_sotrudnikov;
    }

    /**
     * Set idOrganization
     *
     * @param \AppBundle\Entity\Organization $idOrganization
     *
     * @return OrganizationObject
     */
    public function setIdOrganization(\AppBundle\Entity\Organization $idOrganization)
    {
        $this->id_organization = $idOrganization;

        return $this;
    }

    /**
     * Get idOrganization
     *
     * @return \AppBundle\Entity\Organization
     */
    public function getIdOrganization()
    {
        return $this->id_organization;
    }

    /**
     * Add Proverkanarushenie
     *
     * @param \AppBundle\Entity\Proverkanarushenie $Proverkanarushenie
     *
     * @return OrganizationObject
     */
    public function addProverkanarushenie(\AppBundle\Entity\Proverkanarushenie $Proverkanarushenie)
    {
        $this->Proverka_narushenie[] = $Proverkanarushenie;

        return $this;
    }

    /**
     * Remove Proverkanarushenie
     *
     * @param \AppBundle\Entity\Proverkanarushenie $Proverkanarushenie
     */
    public function removeProverkanarushenie(\AppBundle\Entity\Proverkanarushenie $Proverkanarushenie)
    {
        $this->Proverka_narushenie->removeElement($Proverkanarushenie);
    }

    /**
     * Get Proverkanarushenie
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getProverkanarushenie()
    {
        return $this->Proverka_narushenie;
    }
}
