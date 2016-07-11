<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Table(name="dogovorType")
 * @ORM\Entity 
 */
class DogovorType
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
     * @ORM\OneToMany(targetEntity="DogovorType", mappedBy="parent", orphanRemoval=true)
     */
    private $children;
    
    /**
     * @ORM\ManyToOne(targetEntity="DogovorType", inversedBy="children")
     * @ORM\JoinColumn(name="parent_id", referencedColumnName="id")
     */ 
    private $parent;
    
    /**
     * @ORM\OneToMany(targetEntity="Dogovor", mappedBy="dogovorType", orphanRemoval=true, cascade={"persist"})
     */    
    private $dogovor;
    
    /**
     * @ORM\OneToMany(targetEntity="DogovorFkuz", mappedBy="dogovorType", orphanRemoval=true, cascade={"persist"})
     */    
    private $dogovorFkuz;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->dogovors = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return DogovorType
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
     * Set parentId
     *
     * @param string $parentId
     *
     * @return DogovorType
     */
    public function setParentId($parentId)
    {
        $this->parent_id = $parentId;

        return $this;
    }

    /**
     * Get parentId
     *
     * @return string
     */
    public function getParentId()
    {
        return $this->parent_id;
    }

    /**
     * Add dogovor
     *
     * @param \AppBundle\Entity\Dogovor $dogovor
     *
     * @return DogovorType
     */
    public function addDogovor(\AppBundle\Entity\Dogovor $dogovor)
    {
        $this->dogovors[] = $dogovor;

        return $this;
    }

    /**
     * Remove dogovor
     *
     * @param \AppBundle\Entity\Dogovor $dogovor
     */
    public function removeDogovor(\AppBundle\Entity\Dogovor $dogovor)
    {
        $this->dogovors->removeElement($dogovor);
    }

    /**
     * Get dogovors
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDogovors()
    {
        return $this->dogovors;
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
     * Set parent
     *
     * @param \AppBundle\Entity\DogovorType $parent
     *
     * @return DogovorType
     */
    public function setParent(\AppBundle\Entity\DogovorType $parent = null)
    {
        $this->parent = $parent;

        return $this;
    }

    /**
     * Get parent
     *
     * @return \AppBundle\Entity\DogovorType
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Add child
     *
     * @param \AppBundle\Entity\DogovorType $child
     *
     * @return DogovorType
     */
    public function addChild(\AppBundle\Entity\DogovorType $child)
    {
        $this->children[] = $child;

        return $this;
    }

    /**
     * Remove child
     *
     * @param \AppBundle\Entity\DogovorType $child
     */
    public function removeChild(\AppBundle\Entity\DogovorType $child)
    {
        $this->children->removeElement($child);
    }

    /**
     * Get children
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getChildren()
    {
        return $this->children;
    }

    /**
     * Add dogovorFkuz
     *
     * @param \AppBundle\Entity\DogovorFkuz $dogovorFkuz
     *
     * @return DogovorType
     */
    public function addDogovorFkuz(\AppBundle\Entity\DogovorFkuz $dogovorFkuz)
    {
        $this->dogovorFkuz[] = $dogovorFkuz;

        return $this;
    }

    /**
     * Remove dogovorFkuz
     *
     * @param \AppBundle\Entity\DogovorFkuz $dogovorFkuz
     */
    public function removeDogovorFkuz(\AppBundle\Entity\DogovorFkuz $dogovorFkuz)
    {
        $this->dogovorFkuz->removeElement($dogovorFkuz);
    }

    /**
     * Get dogovorFkuz
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDogovorFkuz()
    {
        return $this->dogovorFkuz;
    }
}
