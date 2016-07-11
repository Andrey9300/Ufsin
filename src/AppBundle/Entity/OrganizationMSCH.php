<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Table(name="organizationmsch")
 * @ORM\Entity
 */
class OrganizationMSCH
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
     * @return OrganizationMSCH
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
     * Set idOrganization
     *
     * @param \AppBundle\Entity\Organization $idOrganization
     *
     * @return OrganizationMSCH
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
}
