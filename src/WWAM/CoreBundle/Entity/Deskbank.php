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
     * @ORM\Column(name="depth", type="integer")
     */
    private $depth;

    /**
     * @var integer
     *
     * @ORM\Column(name="width", type="integer")
     */
    private $width;


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
}
