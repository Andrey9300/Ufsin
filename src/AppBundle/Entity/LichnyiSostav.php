<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Table(name="lichnyisostav")
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="AppBundle\Repository\LichnyiSostavRepository")   
 */
class LichnyiSostav
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
     * @ORM\Column(type="string")
     * @Assert\NotBlank()
     */        
    private $address;
    
    /**
     * @ORM\Column(type="string")
     * @Assert\NotBlank()
     */        
    private $profession;

    /**
     * @ORM\Column(type="date", nullable=true)
     * @Assert\Date()
     */         
    private $data_extr_izv;
    
    /**
     * @ORM\Column(type="date", nullable=true)
     * @Assert\Date()
     */         
    private $data_zabolevaniya;
    
    /**
     * @ORM\Column(type="date", nullable=true)
     * @Assert\Date()
     */         
    private $data_obracheniya;
    
    /**
     * @ORM\ManyToOne(targetEntity="Organization", inversedBy="lichnyisostav", cascade={"persist"})
     * @ORM\JoinColumn(name="organization_id", referencedColumnName="id")
     */ 
    private $organization;

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
     * Set type
     *
     * @param string $type
     *
     * @return LichnyiSostav
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
     * Set gender
     *
     * @param string $gender
     *
     * @return LichnyiSostav
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
     * @return LichnyiSostav
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
     * @return LichnyiSostav
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
     * Set address
     *
     * @param string $address
     *
     * @return LichnyiSostav
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
     * Set profession
     *
     * @param string $profession
     *
     * @return LichnyiSostav
     */
    public function setProfession($profession)
    {
        $this->profession = $profession;

        return $this;
    }

    /**
     * Get profession
     *
     * @return string
     */
    public function getProfession()
    {
        return $this->profession;
    }

    /**
     * Set dataExtrIzv
     *
     * @param \DateTime $dataExtrIzv
     *
     * @return LichnyiSostav
     */
    public function setDataExtrIzv($dataExtrIzv)
    {
        $this->data_extr_izv = $dataExtrIzv;

        return $this;
    }

    /**
     * Get dataExtrIzv
     *
     * @return \DateTime
     */
    public function getDataExtrIzv()
    {
        return $this->data_extr_izv;
    }

    /**
     * Set dataZabolevaniya
     *
     * @param \DateTime $dataZabolevaniya
     *
     * @return LichnyiSostav
     */
    public function setDataZabolevaniya($dataZabolevaniya)
    {
        $this->data_zabolevaniya = $dataZabolevaniya;

        return $this;
    }

    /**
     * Get dataZabolevaniya
     *
     * @return \DateTime
     */
    public function getDataZabolevaniya()
    {
        return $this->data_zabolevaniya;
    }

    /**
     * Set dataObracheniya
     *
     * @param \DateTime $dataObracheniya
     *
     * @return LichnyiSostav
     */
    public function setDataObracheniya($dataObracheniya)
    {
        $this->data_obracheniya = $dataObracheniya;

        return $this;
    }

    /**
     * Get dataObracheniya
     *
     * @return \DateTime
     */
    public function getDataObracheniya()
    {
        return $this->data_obracheniya;
    }

    /**
     * Set organization
     *
     * @param \AppBundle\Entity\Organization $organization
     *
     * @return LichnyiSostav
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
     * Constructor
     */
    public function __construct()
    {
        $this->ochag = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add ochag
     *
     * @param \AppBundle\Entity\Ochag $ochag
     *
     * @return LichnyiSostav
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

    /**
     * Set ochag
     *
     * @param \AppBundle\Entity\Ochag $ochag
     *
     * @return LichnyiSostav
     */
    public function setOchag(\AppBundle\Entity\Ochag $ochag = null)
    {
        $this->ochag = $ochag;

        return $this;
    }
}
