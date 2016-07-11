<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Table(name="dogovortypes")
 * @ORM\Entity
 */
class DogovorTypes
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
     * @ORM\Column(type="string")
     * @Assert\NotBlank()
     */    
    private $parent_id;
    
    /**
     * @ORM\OneToMany(
     *      targetEntity="DogovorType",
     *      mappedBy="id_dogovor_types",
     *      orphanRemoval=true
     * )
     */
    private $dogovor_type;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->dogovor_type = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return DogovorTypes
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
     * @return DogovorTypes
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
     * Add dogovorType
     *
     * @param \AppBundle\Entity\DogovorType $dogovorType
     *
     * @return DogovorTypes
     */
    public function addDogovorType(\AppBundle\Entity\DogovorType $dogovorType)
    {
        $this->dogovor_type[] = $dogovorType;

        return $this;
    }

    /**
     * Remove dogovorType
     *
     * @param \AppBundle\Entity\DogovorType $dogovorType
     */
    public function removeDogovorType(\AppBundle\Entity\DogovorType $dogovorType)
    {
        $this->dogovor_type->removeElement($dogovorType);
    }

    /**
     * Get dogovorType
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDogovorType()
    {
        return $this->dogovor_type;
    }
}
