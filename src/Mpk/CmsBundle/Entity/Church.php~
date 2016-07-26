<?php

namespace Mpk\CmsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Church
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Mpk\CmsBundle\Entity\ChurchRepository")
 */
class Church
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=255)
     */
    private $address;

    /**
     * @var string
     *
     * @ORM\Column(name="telephone", type="string", length=255)
     */
    private $telephone;

    /**
     * @var string
     *
     * @ORM\Column(name="constituency", type="string", length=255)
     */
    private $constituency;
    
    /**
     * @ORM\OneToMany(targetEntity="Mpk\CmsBundle\Entity\ConvenantFamily", mappedBy="church", cascade="persist")
     * @ORM\JoinColumn(nullable=true)
     */
    private $convenantFamily;
    
    public function __toString() {
        if(!$this->getName()){
            return 'New Church';
        }
        
        return $this->getName();
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
     * @return Church
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
     * Set address
     *
     * @param string $address
     * @return Church
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
     * Set telephone
     *
     * @param string $telephone
     * @return Church
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return string 
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set constituency
     *
     * @param string $constituency
     * @return Church
     */
    public function setConstituency($constituency)
    {
        $this->constituency = $constituency;

        return $this;
    }

    /**
     * Get constituency
     *
     * @return string 
     */
    public function getConstituency()
    {
        return $this->constituency;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->convenantFamily = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add convenantFamily
     *
     * @param \Mpk\CmsBundle\Entity\ConvenantFamily $convenantFamily
     * @return Church
     */
    public function addConvenantFamily(\Mpk\CmsBundle\Entity\ConvenantFamily $convenantFamily)
    {
        $this->convenantFamily[] = $convenantFamily;

        return $this;
    }

    /**
     * Remove convenantFamily
     *
     * @param \Mpk\CmsBundle\Entity\ConvenantFamily $convenantFamily
     */
    public function removeConvenantFamily(\Mpk\CmsBundle\Entity\ConvenantFamily $convenantFamily)
    {
        $this->convenantFamily->removeElement($convenantFamily);
    }

    /**
     * Get convenantFamily
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getConvenantFamily()
    {
        return $this->convenantFamily;
    }
}
