<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Doctrine\ORM\Mapping;
use AppBundle\Entity\Marks;
use AppBundle\Entity\Models;
use AppBundle\Entity\Attributes;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;


class AdvertType extends AbstractType
{
    private $attr;
    private $mark;
    private $model;

    public function __construct(array $marks, array $models, array $attributes)
    {
        if(!is_null($attributes))
        {
            foreach($attributes as $attribute)
            {
                $this->attr[$attribute->getId()]  = $attribute->getAttributeName();
            }
        }
        else
            throw new \Exception("Error with attributes, check database");

        if(!is_null($marks))
        {
            foreach($marks as $mark)
            {
                $this->mark[$mark->getId()]  = $mark->getMarksName();
            }
        }
        else
            throw new \Exception("Error with marks, check database");

        if(!is_null($models))
        {
            foreach($models as $model)
            {
                $this->model[$model->getId()]  = $model->getModelsName();
            }
        }
        else
            throw new \Exception("Error with models, check database");
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('mark', 'choice', array(
            'choices' => $this->mark,
            'attr'    => array('class' => 'mark')
        ));

        $builder->add('model', 'choice', array(
            'choices'   => $this->model,
            'attr'      => array('class' => 'model')
        ));

        $builder->add('attr', 'choice', array(
            'choices'   => $this->attr,
            'multiple'  => true,
            'expanded'  => true,
            'label'     => false,
            'attr'      => array('class' => 'attr')
        ));
        
        $builder->add('comment', 'textarea');
        
        $builder->add('submit', 'submit', array(
            'attr'      => array('class' => 'submit')
        ));
    }

    public function getName()
    {
        return 'advert';
    }
}