<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Table(name="Proverkanakazaniefkuz")
 * @ORM\Entity
 */
class ProverkaNakazanieFkuz
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
     * @ORM\Column(type="date", nullable=true)
     * @Assert\Date()
     */
    private $date;

    /**
     * @ORM\Column(type="string")
     * @Assert\NotBlank()
     */
    private $fio;

    /**
     * @ORM\Column(type="string")
     * @Assert\NotBlank()
     */
    private $dolgnost;

    /**
     * @ORM\Column(type="string")
     * @Assert\NotBlank()
     */
    private $zvanie;

    /**
     * @ORM\Column(type="string")
     * @Assert\NotBlank()
     */
    private $type;

    /**
     * @ORM\Column(type="string")
     * @Assert\NotBlank()
     */
    private $vid;

    /**
     * @ORM\Column(type="string")
     * @Assert\NotBlank()
     */
    private $podchinennost;

    /**
     * @ORM\ManyToOne(targetEntity="ProverkaFkuz", inversedBy="proverkaNakazanieFkuz", cascade={"persist"})
     * @ORM\JoinColumn(name="proverka_fkuz_id", referencedColumnName="id")
     */
    private $proverkaFkuz;

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
     *
     * @return ProverkaNakazanieFkuz
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
     *
     * @return ProverkaNakazanieFkuz
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
     * Set fio
     *
     * @param string $fio
     *
     * @return ProverkaNakazanieFkuz
     */
    public function setFio($fio)
    {
        $this->fio = $fio;

        return $this;
    }

    /**
     * Get fio
     *
     * @return string
     */
    public function getFio()
    {
        return $this->fio;
    }

    /**
     * Set dolgnost
     *
     * @param string $dolgnost
     *
     * @return ProverkaNakazanieFkuz
     */
    public function setDolgnost($dolgnost)
    {
        $this->dolgnost = $dolgnost;

        return $this;
    }

    /**
     * Get dolgnost
     *
     * @return string
     */
    public function getDolgnost()
    {
        return $this->dolgnost;
    }

    /**
     * Set zvanie
     *
     * @param string $zvanie
     *
     * @return ProverkaNakazanieFkuz
     */
    public function setZvanie($zvanie)
    {
        $this->zvanie = $zvanie;

        return $this;
    }

    /**
     * Get zvanie
     *
     * @return string
     */
    public function getZvanie()
    {
        return $this->zvanie;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return ProverkaNakazanieFkuz
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set vid
     *
     * @param string $vid
     *
     * @return ProverkaNakazanieFkuz
     */
    public function setVid($vid)
    {
        $this->vid = $vid;

        return $this;
    }

    /**
     * Get vid
     *
     * @return string
     */
    public function getVid()
    {
        return $this->vid;
    }

    /**
     * Set podchinennost
     *
     * @param string $podchinennost
     *
     * @return ProverkaNakazanieFkuz
     */
    public function setPodchinennost($podchinennost)
    {
        $this->podchinennost = $podchinennost;

        return $this;
    }

    /**
     * Get podchinennost
     *
     * @return string
     */
    public function getPodchinennost()
    {
        return $this->podchinennost;
    }

    /**
     * Set proverkaFkuz
     *
     * @param \AppBundle\Entity\ProverkaFkuz $proverkaFkuz
     *
     * @return ProverkaNakazanieFkuz
     */
    public function setProverkaFkuz(\AppBundle\Entity\ProverkaFkuz $proverkaFkuz = null)
    {
        $this->proverkaFkuz = $proverkaFkuz;

        return $this;
    }

    /**
     * Get proverkaFkuz
     *
     * @return \AppBundle\Entity\ProverkaFkuz
     */
    public function getProverkaFkuz()
    {
        return $this->proverkaFkuz;
    }
}
