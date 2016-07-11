<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Table(name="pokazatelsissledovaniyafkuz")
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PokazatelsIssledovaniyaFkzRepository")
 */
class PokazatelsIssledovaniyaFkuz
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
     * @ORM\ManyToOne(targetEntity="IssledovanieFkuz", inversedBy="pokazatelsIssledovaniyaFkuz", cascade={"persist"})
     * @ORM\JoinColumn(name="issledovanie_id", referencedColumnName="id")
     */
    private $issledovanieFkuz;

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
     * @return PokazatelsIssledovaniyaFkuz
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
     * @return PokazatelsIssledovaniyaFkuz
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
     * Set issledovanieFkuz
     *
     * @param \AppBundle\Entity\IssledovanieFkuz $issledovanieFkuz
     * @return PokazatelsIssledovaniyaFkuz
     */
    public function setIssledovanieFkuz(\AppBundle\Entity\IssledovanieFkuz $issledovanieFkuz = null)
    {
        $this->issledovanieFkuz = $issledovanieFkuz;

        return $this;
    }

    /**
     * Get issledovanieFkuz
     *
     * @return \AppBundle\Entity\IssledovanieFkuz 
     */
    public function getIssledovanieFkuz()
    {
        return $this->issledovanieFkuz;
    }
}
