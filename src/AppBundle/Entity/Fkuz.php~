<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Table(name="fkuz")
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="AppBundle\Repository\FkuzRepository")  
 */
class Fkuz
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
    private $name_full;
    
    /**
     * @ORM\Column(type="string")
     * @Assert\NotBlank()
     */       
    private $name_short;
    
    /**
     * @ORM\Column(type="string")
     * @Assert\NotBlank()
     */       
    private $address;
    
    /**
     * @ORM\OneToOne(targetEntity="Rukovoditel", inversedBy="fkuz", orphanRemoval=true, cascade={"persist"})
     * @ORM\JoinColumn(name="rukovoditel_id", referencedColumnName="id")
     */
    private $rukovoditel;
    
    /**
     * @ORM\OneToMany(targetEntity="License", mappedBy="fkuz", orphanRemoval=true, cascade={"persist"})
     */
    private $license;
    
    /**
     * @ORM\OneToMany(targetEntity="DogovorFkuz", mappedBy="fkuz", orphanRemoval=true, cascade={"persist"})
     */
    private $dogovorFkuz;
    
    /**
     * @ORM\OneToMany(targetEntity="Proverka", mappedBy="fkuz", orphanRemoval=true, cascade={"persist"})
     */
    private $proverkaFkuz;

    /**
     * @ORM\OneToMany(targetEntity="IssledovanieFkuz", mappedBy="fkuz", orphanRemoval=true, cascade={"persist"})
     */
    private $issledovanieFkuz;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->license = new \Doctrine\Common\Collections\ArrayCollection();
        $this->dogovorFkuz = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set name_full
     *
     * @param string $nameFull
     * @return Fkuz
     */
    public function setNameFull($nameFull)
    {
        $this->name_full = $nameFull;

        return $this;
    }

    /**
     * Get name_full
     *
     * @return string 
     */
    public function getNameFull()
    {
        return $this->name_full;
    }

    /**
     * Set name_short
     *
     * @param string $nameShort
     * @return Fkuz
     */
    public function setNameShort($nameShort)
    {
        $this->name_short = $nameShort;

        return $this;
    }

    /**
     * Get name_short
     *
     * @return string 
     */
    public function getNameShort()
    {
        return $this->name_short;
    }

    /**
     * Set address
     *
     * @param string $address
     * @return Fkuz
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string 
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set rukovoditel
     *
     * @param \AppBundle\Entity\Rukovoditel $rukovoditel
     * @return Fkuz
     */
    public function setRukovoditel(\AppBundle\Entity\Rukovoditel $rukovoditel = null)
    {
        $this->rukovoditel = $rukovoditel;

        return $this;
    }

    /**
     * Get rukovoditel
     *
     * @return \AppBundle\Entity\Rukovoditel 
     */
    public function getRukovoditel()
    {
        return $this->rukovoditel;
    }

    /**
     * Add license
     *
     * @param \AppBundle\Entity\License $license
     * @return Fkuz
     */
    public function addLicense(\AppBundle\Entity\License $license)
    {
        $this->license[] = $license;

        return $this;
    }

    /**
     * Remove license
     *
     * @param \AppBundle\Entity\License $license
     */
    public function removeLicense(\AppBundle\Entity\License $license)
    {
        $this->license->removeElement($license);
    }

    /**
     * Get license
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getLicense()
    {
        return $this->license;
    }

    /**
     * Add dogovorFkuz
     *
     * @param \AppBundle\Entity\DogovorFkuz $dogovorFkuz
     * @return Fkuz
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

    /**
     * Add proverkaFkuz
     *
     * @param \AppBundle\Entity\Proverka $proverkaFkuz
     *
     * @return Fkuz
     */
    public function addProverkaFkuz(\AppBundle\Entity\Proverka $proverkaFkuz)
    {
        $this->proverkaFkuz[] = $proverkaFkuz;

        return $this;
    }

    /**
     * Remove proverkaFkuz
     *
     * @param \AppBundle\Entity\Proverka $proverkaFkuz
     */
    public function removeProverkaFkuz(\AppBundle\Entity\Proverka $proverkaFkuz)
    {
        $this->proverkaFkuz->removeElement($proverkaFkuz);
    }

    /**
     * Get proverkaFkuz
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getProverkaFkuz()
    {
        return $this->proverkaFkuz;
    }

    /**
     * Add issledovanieFkuz
     *
     * @param \AppBundle\Entity\IssledovanieFkuz $issledovanieFkuz
     * @return Fkuz
     */
    public function addIssledovanieFkuz(\AppBundle\Entity\IssledovanieFkuz $issledovanieFkuz)
    {
        $this->issledovanieFkuz[] = $issledovanieFkuz;

        return $this;
    }

    /**
     * Remove issledovanieFkuz
     *
     * @param \AppBundle\Entity\IssledovanieFkuz $issledovanieFkuz
     */
    public function removeIssledovanieFkuz(\AppBundle\Entity\IssledovanieFkuz $issledovanieFkuz)
    {
        $this->issledovanieFkuz->removeElement($issledovanieFkuz);
    }

    /**
     * Get issledovanieFkuz
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIssledovanieFkuz()
    {
        return $this->issledovanieFkuz;
    }
}
