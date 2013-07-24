<?php

namespace WWAM\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Deskbank
 *
 * @ORM\Table(name="deskbank")
 * @ORM\Entity
 */
class Deskbank
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
     * @var integer
     *
     * @ORM\Column(name="width", type="integer")
     */
    private $width;

    /**
     * @var integer
     *
     * @ORM\Column(name="depth", type="integer")
     */
    private $depth;
    
    /**
     * @ORM\ManyToOne(targetEntity="Floor", inversedBy="floor")
     * @ORM\JoinColumn(name="floor_id", referencedColumnName="id")
     */
    private $floor;


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
     * Set width
     *
     * @param integer $width
     * @return Deskbank
     */
    public function setWidth($width)
    {
        $this->width = $width;
    
        return $this;
    }

    /**
     * Get width
     *
     * @return integer 
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * Set depth
     *
     * @param integer $depth
     * @return Deskbank
     */
    public function setDepth($depth)
    {
        $this->depth = $depth;
    
        return $this;
    }

    /**
     * Get depth
     *
     * @return integer 
     */
    public function getDepth()
    {
        return $this->depth;
    }

    /**
     * Set floor
     *
     * @param \WWAM\CoreBundle\Entity\Floor $floor
     * @return Deskbank
     */
    public function setFloor(\WWAM\CoreBundle\Entity\Floor $floor = null)
    {
        $this->floor = $floor;
    
        return $this;
    }

    /**
     * Get floor
     *
     * @return \WWAM\CoreBundle\Entity\Floor 
     */
    public function getFloor()
    {
        return $this->floor;
    }
}