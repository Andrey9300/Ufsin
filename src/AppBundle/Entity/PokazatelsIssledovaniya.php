<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Table(name="pokazatelsissledovaniya")
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PokazatelsIssledovaniyaRepository") 
 */
class PokazatelsIssledovaniya
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
    private $pokazatel;

    /**
     * @ORM\Column(type="string")
     * @Assert\NotBlank()
     */         
    private $description;

    /**
     * @ORM\ManyToOne(targetEntity="Issledovanie", inversedBy="pokazatelsIssledovaniy", cascade={"persist"})
     * @ORM\JoinColumn(name="issledovanie_id", referencedColumnName="id")
     */   
    private $issledovanie;

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
     * Set pokazatel
     *
     * @param string $pokazatel
     * @return PokazatelsIssledovaniya
     */
    public function setPokazatel($pokazatel)
    {
        $this->pokazatel = $pokazatel;

        return $this;
    }

    /**
     * Get pokazatel
     *
     * @return string 
     */
    public function getPokazatel()
    {
        return $this->pokazatel;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return PokazatelsIssledovaniya
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set issledovanie
     *
     * @param \AppBundle\Entity\Issledovanie $issledovanie
     * @return PokazatelsIssledovaniya
     */
    public function setIssledovanie(\AppBundle\Entity\Issledovanie $issledovanie = null)
    {
        $this->issledovanie = $issledovanie;

        return $this;
    }

    /**
     * Get issledovanie
     *
     * @return \AppBundle\Entity\Issledovanie 
     */
    public function getIssledovanie()
    {
        return $this->issledovanie;
    }
}
