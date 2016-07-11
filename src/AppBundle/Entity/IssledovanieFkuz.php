<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Table(name="issledovanieFkuz")
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="AppBundle\Repository\IssledovanieFkuzRepository")
 */
class IssledovanieFkuz
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
    private $nomer;

    /**
     * @ORM\Column(type="date")
     * @Assert\Date()
     */
    private $date;

    /**
     * @ORM\Column(type="integer")
     * @Assert\NotBlank()
     */
    private $all_count;

    /**
     * @ORM\Column(type="integer", options={"default":0})
     * @Assert\NotBlank()
     */
    private $ne_sootv;

    /**
     * @ORM\OneToMany(targetEntity="PokazatelsIssledovaniyaFkuz", mappedBy="issledovanieFkuz", orphanRemoval=true, cascade={"persist"})
     */
    private $pokazatelsIssledovaniyFkuz;

    /**
     * @ORM\ManyToOne(targetEntity="Fkuz", inversedBy="issledovanieFkuz", cascade={"persist"})
     * @ORM\JoinColumn(name="fkuz_id", referencedColumnName="id")
     */
    private $fkuz;

    /**
     * @ORM\ManyToOne(targetEntity="IssledovanieType", inversedBy="issledovanieFkuz", cascade={"persist"})
     * @ORM\JoinColumn(name="issledovanieType_id", referencedColumnName="id")
     */
    private $issledovanieType;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->pokazatelsIssledovaniyFkuz = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set nomer
     *
     * @param string $nomer
     * @return IssledovanieFkuz
     */
    public function setNomer($nomer)
    {
        $this->nomer = $nomer;

        return $this;
    }

    /**
     * Get nomer
     *
     * @return string 
     */
    public function getNomer()
    {
        return $this->nomer;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return IssledovanieFkuz
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set all_count
     *
     * @param integer $allCount
     * @return IssledovanieFkuz
     */
    public function setAllCount($allCount)
    {
        $this->all_count = $allCount;

        return $this;
    }

    /**
     * Get all_count
     *
     * @return integer 
     */
    public function getAllCount()
    {
        return $this->all_count;
    }

    /**
     * Set ne_sootv
     *
     * @param integer $neSootv
     * @return IssledovanieFkuz
     */
    public function setNeSootv($neSootv)
    {
        $this->ne_sootv = $neSootv;

        return $this;
    }

    /**
     * Get ne_sootv
     *
     * @return integer 
     */
    public function getNeSootv()
    {
        return $this->ne_sootv;
    }

    /**
     * Add pokazatelsIssledovaniyFkuz
     *
     * @param \AppBundle\Entity\PokazatelsIssledovaniyaFkuz $pokazatelsIssledovaniyFkuz
     * @return IssledovanieFkuz
     */
    public function addPokazatelsIssledovaniyFkuz(\AppBundle\Entity\PokazatelsIssledovaniyaFkuz $pokazatelsIssledovaniyFkuz)
    {
        $this->pokazatelsIssledovaniyFkuz[] = $pokazatelsIssledovaniyFkuz;

        return $this;
    }

    /**
     * Remove pokazatelsIssledovaniyFkuz
     *
     * @param \AppBundle\Entity\PokazatelsIssledovaniyaFkuz $pokazatelsIssledovaniyFkuz
     */
    public function removePokazatelsIssledovaniyFkuz(\AppBundle\Entity\PokazatelsIssledovaniyaFkuz $pokazatelsIssledovaniyFkuz)
    {
        $this->pokazatelsIssledovaniyFkuz->removeElement($pokazatelsIssledovaniyFkuz);
    }

    /**
     * Get pokazatelsIssledovaniyFkuz
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPokazatelsIssledovaniyFkuz()
    {
        return $this->pokazatelsIssledovaniyFkuz;
    }

    /**
     * Set fkuz
     *
     * @param \AppBundle\Entity\Fkuz $fkuz
     * @return IssledovanieFkuz
     */
    public function setFkuz(\AppBundle\Entity\Fkuz $fkuz = null)
    {
        $this->fkuz = $fkuz;

        return $this;
    }

    /**
     * Get fkuz
     *
     * @return \AppBundle\Entity\Fkuz 
     */
    public function getFkuz()
    {
        return $this->fkuz;
    }

    /**
     * Set issledovanieType
     *
     * @param \AppBundle\Entity\IssledovanieType $issledovanieType
     * @return IssledovanieFkuz
     */
    public function setIssledovanieType(\AppBundle\Entity\IssledovanieType $issledovanieType = null)
    {
        $this->issledovanieType = $issledovanieType;

        return $this;
    }

    /**
     * Get issledovanieType
     *
     * @return \AppBundle\Entity\IssledovanieType 
     */
    public function getIssledovanieType()
    {
        return $this->issledovanieType;
    }
}
