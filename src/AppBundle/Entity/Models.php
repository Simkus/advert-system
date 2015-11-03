<?php

namespace AppBundle\Entity;

/**
 * Models
 */
class Models
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $modelsName;

    /**
     * @var integer
     */
    private $markId;


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
     * Set modelsName
     *
     * @param string $modelsName
     *
     * @return Models
     */
    public function setModelsName($modelsName)
    {
        $this->modelsName = $modelsName;

        return $this;
    }

    /**
     * Get modelsName
     *
     * @return string
     */
    public function getModelsName()
    {
        return $this->modelsName;
    }

    /**
     * Set markId
     *
     * @param integer $markId
     *
     * @return Models
     */
    public function setMarkId($markId)
    {
        $this->markId = $markId;

        return $this;
    }

    /**
     * Get markId
     *
     * @return integer
     */
    public function getMarkId()
    {
        return $this->markId;
    }
}

