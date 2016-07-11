<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Table(name="objects")
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ObjectsRepository")  
 */
class Objects
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
     * @ORM\ManyToMany(targetEntity="Organization", mappedBy="objects")
     */       
    private $organization_id;
    
    /**
     * @ORM\ManyToMany(targetEntity="Dogovor", mappedBy="dogovor_objects")
     */       
    private $dogovor_id;

    /**
     * @ORM\OneToMany(targetEntity="ProverkaNarushenie", mappedBy="objects", orphanRemoval=true, cascade={"persist"})
     */
    private $proverkanarushenie;     

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->organization = new \Doctrine\Common\Collections\ArrayCollection();
        $this->dogovor = new \Doctrine\Common\Collections\ArrayCollection();
        $this->proverka_narushenie = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Objects
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
     * Add organization
     *
     * @param \AppBundle\Entity\Organization $organization
     *
     * @return Objects
     */
    public function addOrganization(\AppBundle\Entity\Organization $organization)
    {
        $this->organization[] = $organization;

        return $this;
    }

    /**
     * Remove organization
     *
     * @param \AppBundle\Entity\Organization $organization
     */
    public function removeOrganization(\AppBundle\Entity\Organization $organization)
    {
        $this->organization->removeElement($organization);
    }

    /**
     * Get organization
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getOrganization()
    {
        return $this->organization;
    }

    /**
     * Add dogovor
     *
     * @param \AppBundle\Entity\Dogovor $dogovor
     *
     * @return Objects
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
     * Add proverkaNarushenie
     *
     * @param \AppBundle\Entity\ProverkaNarushenie $proverkaNarushenie
     *
     * @return Objects
     */
    public function addProverkaNarushenie(\AppBundle\Entity\ProverkaNarushenie $proverkaNarushenie)
    {
        $this->proverka_narushenie[] = $proverkaNarushenie;

        return $this;
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
     * Add organizationId
     *
     * @param \AppBundle\Entity\Organization $organizationId
     *
     * @return Objects
     */
    public function addOrganizationId(\AppBundle\Entity\Organization $organizationId)
    {
        $this->organization_id[] = $organizationId;

        return $this;
    }

    /**
     * Remove organizationId
     *
     * @param \AppBundle\Entity\Organization $organizationId
     */
    public function removeOrganizationId(\AppBundle\Entity\Organization $organizationId)
    {
        $this->organization_id->removeElement($organizationId);
    }

    /**
     * Get organizationId
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getOrganizationId()
    {
        return $this->organization_id;
    }

    /**
     * Add dogovorId
     *
     * @param \AppBundle\Entity\Dogovor $dogovorId
     *
     * @return Objects
     */
    public function addDogovorId(\AppBundle\Entity\Dogovor $dogovorId)
    {
        $this->dogovor_id[] = $dogovorId;

        return $this;
    }

    /**
     * Remove dogovorId
     *
     * @param \AppBundle\Entity\Dogovor $dogovorId
     */
    public function removeDogovorId(\AppBundle\Entity\Dogovor $dogovorId)
    {
        $this->dogovor_id->removeElement($dogovorId);
    }

    /**
     * Get dogovorId
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDogovorId()
    {
        return $this->dogovor_id;
    }

    /**
     * Add dogovorObject
     *
     * @param \AppBundle\Entity\Dogovor $dogovorObject
     *
     * @return Objects
     */
    public function addDogovorObject(\AppBundle\Entity\Dogovor $dogovorObject)
    {
        $this->dogovor_objects[] = $dogovorObject;

        return $this;
    }

    /**
     * Remove dogovorObject
     *
     * @param \AppBundle\Entity\Dogovor $dogovorObject
     */
    public function removeDogovorObject(\AppBundle\Entity\Dogovor $dogovorObject)
    {
        $this->dogovor_objects->removeElement($dogovorObject);
    }

    /**
     * Get dogovorObjects
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDogovorObjects()
    {
        return $this->dogovor_objects;
    }
}
