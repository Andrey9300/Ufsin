<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Table(name="issledovanietype")
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="AppBundle\Repository\IssledovanieTypeRepository")  
 */
class IssledovanieType
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
     * @ORM\Column(type="string", nullable=true)
     * @Assert\NotBlank()
     */     
    private $is_parent;
    
    /**
     * @ORM\OneToMany(targetEntity="IssledovanieType", mappedBy="parent", orphanRemoval=true)
     */
    private $children;

    /**
     * @ORM\ManyToOne(targetEntity="IssledovanieType", inversedBy="children")
     * @ORM\JoinColumn(name="parent_id", referencedColumnName="id")
     */ 
    private $parent;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->children = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return IssledovanieType
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
     * Set isParent
     *
     * @param string $isParent
     *
     * @return IssledovanieType
     */
    public function setIsParent($isParent)
    {
        $this->is_parent = $isParent;

        return $this;
    }

    /**
     * Get isParent
     *
     * @return string
     */
    public function getIsParent()
    {
        return $this->is_parent;
    }

    /**
     * Add child
     *
     * @param \AppBundle\Entity\IssledovanieType $child
     *
     * @return IssledovanieType
     */
    public function addChild(\AppBundle\Entity\IssledovanieType $child)
    {
        $this->children[] = $child;

        return $this;
    }

    /**
     * Remove child
     *
     * @param \AppBundle\Entity\IssledovanieType $child
     */
    public function removeChild(\AppBundle\Entity\IssledovanieType $child)
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
     * Set parent
     *
     * @param \AppBundle\Entity\IssledovanieType $parent
     *
     * @return IssledovanieType
     */
    public function setParent(\AppBundle\Entity\IssledovanieType $parent = null)
    {
        $this->parent = $parent;

        return $this;
    }

    /**
     * Get parent
     *
     * @return \AppBundle\Entity\IssledovanieType
     */
    public function getParent()
    {
        return $this->parent;
    }
}
