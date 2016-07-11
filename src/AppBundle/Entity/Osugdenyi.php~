<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Table(name="osugdenyi")
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="AppBundle\Repository\OsugdenyiRepository")  
 */
class Osugdenyi
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
    private $gender;
   
    /**
     * @ORM\Column(type="string")
     * @Assert\NotBlank()
     */       
    private $fio;
   
    /**
     * @ORM\Column(type="date", nullable=true)
     * @Assert\Date()
     */            
    private $date_birthday;
   
    /**
     * @ORM\Column(type="string", nullable=true)
     * @Assert\NotBlank()
     */       
    private $place_job;
    
    /**
     * @ORM\Column(type="string", nullable=true)
     * @Assert\NotBlank()
     */       
    private $place_study;   
    
    /**
     * @ORM\Column(type="string")
     * @Assert\NotBlank()
     */       
    private $place_progivaniya; 
    
    /**
     * @ORM\Column(type="date", nullable=true)
     * @Assert\Date()
     */            
    private $date_viyavleniya;   

    /**
     * @ORM\Column(type="date", nullable=true)
     * @Assert\Date()
     */            
    private $date_vzyatiya_na_uchet; 

    /**
     * @ORM\Column(type="string")
     * @Assert\NotBlank()
     */       
    private $mbt;

    /**
     * @ORM\Column(type="date", nullable=true)
     * @Assert\Date()
     */            
    private $date_gospit; 

    /**
     * @ORM\Column(type="date", nullable=true)
     * @Assert\Date()
     */            
    private $date_perevoda; 

    /**
     * @ORM\Column(type="date", nullable=true)
     * @Assert\Date()
     */            
    private $date_zakl_dezin;
 
    /**
     * @ORM\Column(type="date", nullable=true)
     * @Assert\Date()
     */            
    private $date_post_v_org; 
    
    /**
     * @ORM\Column(type="date", nullable=true)
     * @Assert\Date()
     */            
    private $date_obr;
    
    /**
     * @ORM\Column(type="string", nullable=true)
     * @Assert\NotBlank()
     */       
    private $viyavlen;
        
    /**
     * @ORM\Column(type="string", nullable=true)
     * @Assert\NotBlank()
     */       
    private $recidiv;

    /**
     * @ORM\Column(type="string", nullable=true)
     * @Assert\NotBlank()
     */       
    private $postupil_iz;   
    
    /**
     * @ORM\Column(type="string", nullable=true)
     * @Assert\NotBlank()
     */       
    private $address_common;

    /**
     * @ORM\Column(type="string", nullable=true)
     * @Assert\NotBlank()
     */       
    private $address_propiska;    
    
    /**
     * @ORM\Column(type="string", nullable=true)
     * @Assert\NotBlank()
     */       
    private $is_kontakt;
     
    /**
     * @ORM\OneToMany(targetEntity="DatesFLG", mappedBy="osugdenyi", orphanRemoval=true, cascade={"persist"})
     */
    private $datesFLG;
    
    /**
     * @ORM\OneToMany(targetEntity="SoputPatol", mappedBy="osugdenyi", orphanRemoval=true, cascade={"persist"})
     */
    private $soput_patol;    
    
    /**
     * @ORM\OneToMany(targetEntity="Kontaktnyi", mappedBy="osugdenyi", orphanRemoval=true, cascade={"persist"})
     */
    private $kontaktnyi;
    
    /**
     * @ORM\ManyToOne(targetEntity="Ochag", inversedBy="osugdenyi", cascade={"persist"})
     * @ORM\JoinColumn(name="ochag_id", referencedColumnName="id")     
     */
    private $ochag;    
    
    /**
     * @ORM\ManyToOne(targetEntity="Organization", inversedBy="osugdenyi", cascade={"persist"})
     * @ORM\JoinColumn(name="organization_id", referencedColumnName="id")
     */ 
    private $organization;
 
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->kontaktnyi = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set gender
     *
     * @param string $gender
     *
     * @return Osugdenyi
     */
    public function setGender($gender)
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Get gender
     *
     * @return string
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set fio
     *
     * @param string $fio
     *
     * @return Osugdenyi
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
     * Set dateBirthday
     *
     * @param \DateTime $dateBirthday
     *
     * @return Osugdenyi
     */
    public function setDateBirthday($dateBirthday)
    {
        $this->date_birthday = $dateBirthday;

        return $this;
    }
    
    /**
     * Get dateBirthday
     *
     * @return \DateTime
     */
    public function getDateBirthday()
    {
        return $this->date_birthday;
    }

    /**
     * Set place
     *
     * @param string $place
     *
     * @return Osugdenyi
     */
    public function setPlace($place)
    {
        $this->place = $place;

        return $this;
    }

    /**
     * Get place
     *
     * @return string
     */
    public function getPlace()
    {
        return $this->place;
    }

    /**
     * Set dateViyavleniya
     *
     * @param \DateTime $dateViyavleniya
     *
     * @return Osugdenyi
     */
    public function setDateViyavleniya($dateViyavleniya)
    {
        $this->date_viyavleniya = $dateViyavleniya;

        return $this;
    }

    /**
     * Get dateViyavleniya
     *
     * @return \DateTime
     */
    public function getDateViyavleniya()
    {
        return $this->date_viyavleniya;
    }

    /**
     * Set organization
     *
     * @param \AppBundle\Entity\Organization $organization
     *
     * @return Osugdenyi
     */
    public function setOrganization(\AppBundle\Entity\Organization $organization = null)
    {
        $this->organization = $organization;

        return $this;
    }

    /**
     * Get organization
     *
     * @return \AppBundle\Entity\Organization
     */
    public function getOrganization()
    {
        return $this->organization;
    }

    /**
     * Add kontaktnyi
     *
     * @param \AppBundle\Entity\Kontaktnyi $kontaktnyi
     *
     * @return Osugdenyi
     */
    public function addKontaktnyus(\AppBundle\Entity\Kontaktnyi $kontaktnyi)
    {
        $this->kontaktnyi[] = $kontaktnyi;

        return $this;
    }
    
    public function addKont(Kontaktnyi $kontaktnyi)
    {
        $kontaktnyi->addKon($this);
        $this->kontaktnyi->add($kontaktnyi);
    }
    /**
     * Remove kontaktnyi
     *
     * @param \AppBundle\Entity\Kontaktnyi $kontaktnyi
     */
    public function removeKontaktnyus(\AppBundle\Entity\Kontaktnyi $kontaktnyi)
    {
        $this->kontaktnyi->removeElement($kontaktnyi);
    }

    /**
     * Get kontaktnyi
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getKontaktnyi()
    {
        return $this->kontaktnyi;
    }

    /**
     * Set placeJob
     *
     * @param string $placeJob
     *
     * @return Osugdenyi
     */
    public function setPlaceJob($placeJob)
    {
        $this->place_job = $placeJob;

        return $this;
    }

    /**
     * Get placeJob
     *
     * @return string
     */
    public function getPlaceJob()
    {
        return $this->place_job;
    }

    /**
     * Set placeStudy
     *
     * @param string $placeStudy
     *
     * @return Osugdenyi
     */
    public function setPlaceStudy($placeStudy)
    {
        $this->place_study = $placeStudy;

        return $this;
    }

    /**
     * Get placeStudy
     *
     * @return string
     */
    public function getPlaceStudy()
    {
        return $this->place_study;
    }

    /**
     * Set placeProgivaniya
     *
     * @param string $placeProgivaniya
     *
     * @return Osugdenyi
     */
    public function setPlaceProgivaniya($placeProgivaniya)
    {
        $this->place_progivaniya = $placeProgivaniya;

        return $this;
    }

    /**
     * Get placeProgivaniya
     *
     * @return string
     */
    public function getPlaceProgivaniya()
    {
        return $this->place_progivaniya;
    }

    /**
     * Set dateVzyatiyaNaUchet
     *
     * @param \DateTime $dateVzyatiyaNaUchet
     *
     * @return Osugdenyi
     */
    public function setDateVzyatiyaNaUchet($dateVzyatiyaNaUchet)
    {
        $this->date_vzyatiya_na_uchet = $dateVzyatiyaNaUchet;

        return $this;
    }

    /**
     * Get dateVzyatiyaNaUchet
     *
     * @return \DateTime
     */
    public function getDateVzyatiyaNaUchet()
    {
        return $this->date_vzyatiya_na_uchet;
    }

    /**
     * Set mbt
     *
     * @param string $mbt
     *
     * @return Osugdenyi
     */
    public function setMbt($mbt)
    {
        $this->mbt = $mbt;

        return $this;
    }

    /**
     * Get mbt
     *
     * @return string
     */
    public function getMbt()
    {
        return $this->mbt;
    }

    /**
     * Set dateGospit
     *
     * @param \DateTime $dateGospit
     *
     * @return Osugdenyi
     */
    public function setDateGospit($dateGospit)
    {
        $this->date_gospit = $dateGospit;

        return $this;
    }

    /**
     * Get dateGospit
     *
     * @return \DateTime
     */
    public function getDateGospit()
    {
        return $this->date_gospit;
    }

    /**
     * Set datePerevoda
     *
     * @param \DateTime $datePerevoda
     *
     * @return Osugdenyi
     */
    public function setDatePerevoda($datePerevoda)
    {
        $this->date_perevoda = $datePerevoda;

        return $this;
    }

    /**
     * Get datePerevoda
     *
     * @return \DateTime
     */
    public function getDatePerevoda()
    {
        return $this->date_perevoda;
    }

    /**
     * Set dateZaklDezin
     *
     * @param \DateTime $dateZaklDezin
     *
     * @return Osugdenyi
     */
    public function setDateZaklDezin($dateZaklDezin)
    {
        $this->date_zakl_dezin = $dateZaklDezin;

        return $this;
    }

    /**
     * Get dateZaklDezin
     *
     * @return \DateTime
     */
    public function getDateZaklDezin()
    {
        return $this->date_zakl_dezin;
    }

    /**
     * Add kontaktnyi
     *
     * @param \AppBundle\Entity\Kontaktnyi $kontaktnyi
     *
     * @return Osugdenyi
     */
    public function addKontaktnyi(\AppBundle\Entity\Kontaktnyi $kontaktnyi)
    {
        $this->kontaktnyi[] = $kontaktnyi;

        return $this;
    }

    /**
     * Remove kontaktnyi
     *
     * @param \AppBundle\Entity\Kontaktnyi $kontaktnyi
     */
    public function removeKontaktnyi(\AppBundle\Entity\Kontaktnyi $kontaktnyi)
    {
        $this->kontaktnyi->removeElement($kontaktnyi);
    }

    /**
     * Set isKontakt
     *
     * @param string $isKontakt
     *
     * @return Osugdenyi
     */
    public function setIsKontakt($isKontakt)
    {
        $this->is_kontakt = $isKontakt;

        return $this;
    }

    /**
     * Get isKontakt
     *
     * @return string
     */
    public function getIsKontakt()
    {
        return $this->is_kontakt;
    }

    /**
     * Add ochag
     *
     * @param \AppBundle\Entity\Ochag $ochag
     *
     * @return Osugdenyi
     */
    public function addOchag(\AppBundle\Entity\Ochag $ochag)
    {
        $this->ochag[] = $ochag;

        return $this;
    }

    /**
     * Remove ochag
     *
     * @param \AppBundle\Entity\Ochag $ochag
     */
    public function removeOchag(\AppBundle\Entity\Ochag $ochag)
    {
        $this->ochag->removeElement($ochag);
    }

    /**
     * Get ochag
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getOchag()
    {
        return $this->ochag;
    }
    
    public function addOch(Ochag $ochag)
    {
        if (!$this->ochag->contains($ochag)) {
            $this->ochag->add($ochag);
        }
    }
    
    /**
     * Set ochag
     *
     * @param \AppBundle\Entity\Ochag $ochag
     *
     * @return Osugdenyi
     */
    public function setOchag(\AppBundle\Entity\Ochag $ochag = null)
    {
        $this->ochag = $ochag;

        return $this;
    }


    /**
     * Set datePostVOrg
     *
     * @param \DateTime $datePostVOrg
     *
     * @return Osugdenyi
     */
    public function setDatePostVOrg($datePostVOrg)
    {
        $this->date_post_v_org = $datePostVOrg;

        return $this;
    }

    /**
     * Get datePostVOrg
     *
     * @return \DateTime
     */
    public function getDatePostVOrg()
    {
        return $this->date_post_v_org;
    }

    /**
     * Set dateObr
     *
     * @param \DateTime $dateObr
     *
     * @return Osugdenyi
     */
    public function setDateObr($dateObr)
    {
        $this->date_obr = $dateObr;

        return $this;
    }

    /**
     * Get dateObr
     *
     * @return \DateTime
     */
    public function getDateObr()
    {
        return $this->date_obr;
    }

    /**
     * Set viyavlen
     *
     * @param string $viyavlen
     *
     * @return Osugdenyi
     */
    public function setViyavlen($viyavlen)
    {
        $this->viyavlen = $viyavlen;

        return $this;
    }

    /**
     * Get viyavlen
     *
     * @return string
     */
    public function getViyavlen()
    {
        return $this->viyavlen;
    }

    /**
     * Set recidiv
     *
     * @param string $recidiv
     *
     * @return Osugdenyi
     */
    public function setRecidiv($recidiv)
    {
        $this->recidiv = $recidiv;

        return $this;
    }

    /**
     * Get recidiv
     *
     * @return string
     */
    public function getRecidiv()
    {
        return $this->recidiv;
    }

    /**
     * Set postupilIz
     *
     * @param string $postupilIz
     *
     * @return Osugdenyi
     */
    public function setPostupilIz($postupilIz)
    {
        $this->postupil_iz = $postupilIz;

        return $this;
    }

    /**
     * Get postupilIz
     *
     * @return string
     */
    public function getPostupilIz()
    {
        return $this->postupil_iz;
    }

    /**
     * Set addressCommon
     *
     * @param string $addressCommon
     *
     * @return Osugdenyi
     */
    public function setAddressCommon($addressCommon)
    {
        $this->address_common = $addressCommon;

        return $this;
    }

    /**
     * Get addressCommon
     *
     * @return string
     */
    public function getAddressCommon()
    {
        return $this->address_common;
    }

    /**
     * Set addressPropiska
     *
     * @param string $addressPropiska
     *
     * @return Osugdenyi
     */
    public function setAddressPropiska($addressPropiska)
    {
        $this->address_propiska = $addressPropiska;

        return $this;
    }

    /**
     * Get addressPropiska
     *
     * @return string
     */
    public function getAddressPropiska()
    {
        return $this->address_propiska;
    }

    /**
     * Add datesFLG
     *
     * @param \AppBundle\Entity\DatesFLG $datesFLG
     *
     * @return Osugdenyi
     */
    public function addDatesFLG(\AppBundle\Entity\DatesFLG $datesFLG)
    {
        $this->datesFLG[] = $datesFLG;

        return $this;
    }

    /**
     * Remove datesFLG
     *
     * @param \AppBundle\Entity\DatesFLG $datesFLG
     */
    public function removeDatesFLG(\AppBundle\Entity\DatesFLG $datesFLG)
    {
        $this->datesFLG->removeElement($datesFLG);
    }

    /**
     * Get datesFLG
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDatesFLG()
    {
        return $this->datesFLG;
    }

    /**
     * Add soputPatol
     *
     * @param \AppBundle\Entity\SoputPatol $soputPatol
     *
     * @return Osugdenyi
     */
    public function addSoputPatol(\AppBundle\Entity\SoputPatol $soputPatol)
    {
        $this->soput_patol[] = $soputPatol;

        return $this;
    }

    /**
     * Remove soputPatol
     *
     * @param \AppBundle\Entity\SoputPatol $soputPatol
     */
    public function removeSoputPatol(\AppBundle\Entity\SoputPatol $soputPatol)
    {
        $this->soput_patol->removeElement($soputPatol);
    }

    /**
     * Get soputPatol
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSoputPatol()
    {
        return $this->soput_patol;
    }
}
