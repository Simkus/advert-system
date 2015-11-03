<?php

namespace AppBundle\Entity;

/**
 * Attributes
 */
class Attributes
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $attributeName;


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
     * Set attributeName
     *
     * @param string $attributeName
     *
     * @return Attributes
     */
    public function setAttributeName($attributeName)
    {
        $this->attributeName = $attributeName;

        return $this;
    }

    /**
     * Get attributeName
     *
     * @return string
     */
    public function getAttributeName()
    {
        return $this->attributeName;
    }
}

