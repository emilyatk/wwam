<?php

namespace WWAM\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Floor
 *
 * @ORM\Table(name="floor")
 * @ORM\Entity
 */
class Floor
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
     * @ORM\Column(name="location", type="string", length=3)
     */
    private $location;
    
    /**
     *
     * @ORM\OneToMany(targetEntity="Deskbank", mappedBy="deskbank")
     */
    private $deskbanks;
    
    public function __construct() 
    {
        $this->deskbanks = new ArrayCollection();
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
     * @return Floor
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
     * Set location
     *
     * @param string $location
     * @return Floor
     */
    public function setLocation($location)
    {
        $this->location = $location;
    
        return $this;
    }

    /**
     * Get location
     *
     * @return string 
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Add deskbanks
     *
     * @param \WWAM\CoreBundle\Entity\Deskbank $deskbanks
     * @return Floor
     */
    public function addDeskbank(\WWAM\CoreBundle\Entity\Deskbank $deskbanks)
    {
        $this->deskbanks[] = $deskbanks;
    
        return $this;
    }

    /**
     * Remove deskbanks
     *
     * @param \WWAM\CoreBundle\Entity\Deskbank $deskbanks
     */
    public function removeDeskbank(\WWAM\CoreBundle\Entity\Deskbank $deskbanks)
    {
        $this->deskbanks->removeElement($deskbanks);
    }

    /**
     * Get deskbanks
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDeskbanks()
    {
        return $this->deskbanks;
    }
}