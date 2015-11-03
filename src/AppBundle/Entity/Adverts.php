<?php

namespace AppBundle\Entity;

/**
 * Adverts
 */
class Adverts
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $mark;

    /**
     * @var string
     */
    private $model;

    /**
     * @var string
     */
    private $comment;

    /**
     * @var string
     */
    private $attributes;

    /**
     * @var integer
     */
    private $markId;

    /**
     * @var integer
     */
    private $modelId;


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
     * Set mark
     *
     * @param string $mark
     *
     * @return Adverts
     */
    public function setMark($mark)
    {
        $this->mark = $mark;

        return $this;
    }

    /**
     * Get mark
     *
     * @return string
     */
    public function getMark()
    {
        return $this->mark;
    }

    /**
     * Set model
     *
     * @param string $model
     *
     * @return Adverts
     */
    public function setModel($model)
    {
        $this->model = $model;

        return $this;
    }

    /**
     * Get model
     *
     * @return string
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Set comment
     *
     * @param string $comment
     *
     * @return Adverts
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment
     *
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set attributes
     *
     * @param string $attributes
     *
     * @return Adverts
     */
    public function setAttributes($attributes)
    {
        $this->attributes = $attributes;

        return $this;
    }

    /**
     * Get attributes
     *
     * @return string
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * Set markId
     *
     * @param integer $markId
     *
     * @return Adverts
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

    /**
     * Set modelId
     *
     * @param integer $modelId
     *
     * @return Adverts
     */
    public function setModelId($modelId)
    {
        $this->modelId = $modelId;

        return $this;
    }

    /**
     * Get modelId
     *
     * @return integer
     */
    public function getModelId()
    {
        return $this->modelId;
    }
}

