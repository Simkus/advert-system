<?php

namespace AppBundle\Entity;

/**
 * Marks
 */
class Marks
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $marksName;


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
     * Set marksName
     *
     * @param string $marksName
     *
     * @return Marks
     */
    public function setMarksName($marksName)
    {
        $this->marksName = $marksName;

        return $this;
    }

    /**
     * Get marksName
     *
     * @return string
     */
    public function getMarksName()
    {
        return $this->marksName;
    }
}

