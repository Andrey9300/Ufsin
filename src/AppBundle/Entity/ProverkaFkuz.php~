<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Table(name="ProverkaFkuz")
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ProverkaFkuzRepository")
 */
class ProverkaFkuz
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="date")
     * @Assert\Date()
     */
    private $date;

    /**
     * @ORM\Column(type="string")
     * @Assert\NotBlank()
     */
    private $nomer;

    /**
     * @ORM\Column(type="date", nullable=true)
     * @Assert\Date()
     */
    private $date_rasporyageniya;

    /**
     * @ORM\Column(type="date", nullable=true)
     * @Assert\Date()
     */
    private $date_akt;

    /**
     * @ORM\Column(type="date", nullable=true)
     * @Assert\Date()
     */
    private $date_predpisaniya;

    /**
     * @ORM\Column(type="string")
     * @Assert\NotBlank()
     */
    private $kem_vydano;

    /**
     * @ORM\ManyToOne(targetEntity="Fkuz", inversedBy="proverkaFkuz", cascade={"persist"})
     * @ORM\JoinColumn(name="fkuz_id", referencedColumnName="id")
     */
    private $fkuz;

    /**
     * @ORM\ManyToOne(targetEntity="ProverkaType", inversedBy="proverka", cascade={"persist"})
     * @ORM\JoinColumn(name="proverka_type_id", referencedColumnName="id")
     */
    private $proverkaType;

    /**
     * @ORM\OneToMany(targetEntity="ProverkaNakazanieFkuz", mappedBy="proverkaFkuz", orphanRemoval=true, cascade={"persist"})
     */
    private $proverkaNakazanieFkuz;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->proverkaNakazanieFkuz = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set date
     *
     * @param \DateTime $date
     *
     * @return ProverkaFkuz
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
     * Set nomer
     *
     * @param string $nomer
     *
     * @return ProverkaFkuz
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
     * Set dateRasporyageniya
     *
     * @param \DateTime $dateRasporyageniya
     *
     * @return ProverkaFkuz
     */
    public function setDateRasporyageniya($dateRasporyageniya)
    {
        $this->date_rasporyageniya = $dateRasporyageniya;

        return $this;
    }

    /**
     * Get dateRasporyageniya
     *
     * @return \DateTime
     */
    public function getDateRasporyageniya()
    {
        return $this->date_rasporyageniya;
    }

    /**
     * Set dateAkt
     *
     * @param \DateTime $dateAkt
     *
     * @return ProverkaFkuz
     */
    public function setDateAkt($dateAkt)
    {
        $this->date_akt = $dateAkt;

        return $this;
    }

    /**
     * Get dateAkt
     *
     * @return \DateTime
     */
    public function getDateAkt()
    {
        return $this->date_akt;
    }

    /**
     * Set datePredpisaniya
     *
     * @param \DateTime $datePredpisaniya
     *
     * @return ProverkaFkuz
     */
    public function setDatePredpisaniya($datePredpisaniya)
    {
        $this->date_predpisaniya = $datePredpisaniya;

        return $this;
    }

    /**
     * Get datePredpisaniya
     *
     * @return \DateTime
     */
    public function getDatePredpisaniya()
    {
        return $this->date_predpisaniya;
    }

    /**
     * Set kemVydano
     *
     * @param string $kemVydano
     *
     * @return ProverkaFkuz
     */
    public function setKemVydano($kemVydano)
    {
        $this->kem_vydano = $kemVydano;

        return $this;
    }

    /**
     * Get kemVydano
     *
     * @return string
     */
    public function getKemVydano()
    {
        return $this->kem_vydano;
    }

    /**
     * Set fkuz
     *
     * @param \AppBundle\Entity\Fkuz $fkuz
     *
     * @return ProverkaFkuz
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
     * Set proverkaType
     *
     * @param \AppBundle\Entity\ProverkaType $proverkaType
     *
     * @return ProverkaFkuz
     */
    public function setProverkaType(\AppBundle\Entity\ProverkaType $proverkaType = null)
    {
        $this->proverkaType = $proverkaType;

        return $this;
    }

    /**
     * Get proverkaType
     *
     * @return \AppBundle\Entity\ProverkaType
     */
    public function getProverkaType()
    {
        return $this->proverkaType;
    }

    /**
     * Add proverkaNakazanieFkuz
     *
     * @param \AppBundle\Entity\ProverkaNakazanieFkuz $proverkaNakazanieFkuz
     *
     * @return ProverkaFkuz
     */
    public function addProverkaNakazanieFkuz(\AppBundle\Entity\ProverkaNakazanieFkuz $proverkaNakazanieFkuz)
    {
        $this->proverkaNakazanieFkuz[] = $proverkaNakazanieFkuz;

        return $this;
    }

    /**
     * Remove proverkaNakazanieFkuz
     *
     * @param \AppBundle\Entity\ProverkaNakazanieFkuz $proverkaNakazanieFkuz
     */
    public function removeProverkaNakazanieFkuz(\AppBundle\Entity\ProverkaNakazanieFkuz $proverkaNakazanieFkuz)
    {
        $this->proverkaNakazanieFkuz->removeElement($proverkaNakazanieFkuz);
    }

    /**
     * Get proverkaNakazanieFkuz
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getProverkaNakazanieFkuz()
    {
        return $this->proverkaNakazanieFkuz;
    }
}
