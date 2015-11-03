<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class AdvertType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $marks = array('1' => 'Mark 1', '2' => 'Mark 2');
        $builder->add('mark', 'choice', array('choices' => $marks));
        $builder->add('fullname', 'text');
        $builder->add('submit', 'submit');
    }
    public function getName()
    {
        return 'user';
    }
}