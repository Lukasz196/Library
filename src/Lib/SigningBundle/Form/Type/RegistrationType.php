<?php

namespace Lib\SigningBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class RegistrationType extends AbstractType
{
    public function getName()
    {
        return 'user_registration';
    }
    
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstname', 'text')
            ->add('lastname', 'text')
            ->add('phone', 'text')
            ->add('pesel', 'text')
            ->add('birthdate', 'text')
            ->add('save', 'submit');
    }
    
    public function getParent()
    {
        return 'fos_user_registration';
    }    
}