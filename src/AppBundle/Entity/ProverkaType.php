<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Table(name="Proverkatype")
 * @ORM\Entity
 */
class ProverkaType
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
     * @ORM\Column(type="integer")
     * @Assert\NotBlank()
     */      
    private $planovost;

    /**
     * @ORM\Column(type="string")
     * @Assert\NotBlank()
     */       
    private $parent_id;

    /**
     * @ORM\OneToMany(targetEntity="Proverka", mappedBy="proverkaType", cascade={"persist"})
     */  
    private $proverka; 


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
     * @return ProverkaType
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
     * Set planovost
     *
     * @param string $planovost
     *
     * @return ProverkaType
     */
    public function setPlanovost($planovost)
    {
        $this->planovost = $planovost;

        return $this;
    }

    /**
     * Get planovost
     *
     * @return string
     */
    public function getPlanovost()
    {
        return $this->planovost;
    }

    /**
     * Set parentId
     *
     * @param string $parentId
     *
     * @return ProverkaType
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
     * Set proverka
     *
     * @param \AppBundle\Entity\Proverka $proverka
     *
     * @return ProverkaType
     */
    public function setProverka(\AppBundle\Entity\Proverka $proverka = null)
    {
        $this->proverka = $proverka;

        return $this;
    }

    /**
     * Get proverka
     *
     * @return \AppBundle\Entity\Proverka
     */
    public function getProverka()
    {
        return $this->proverka;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->proverka = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add proverka
     *
     * @param \AppBundle\Entity\Proverka $proverka
     *
     * @return ProverkaType
     */
    public function addProverka(\AppBundle\Entity\Proverka $proverka)
    {
        $this->proverka[] = $proverka;

        return $this;
    }

    /**
     * Remove proverka
     *
     * @param \AppBundle\Entity\Proverka $proverka
     */
    public function removeProverka(\AppBundle\Entity\Proverka $proverka)
    {
        $this->proverka->removeElement($proverka);
    }
}
