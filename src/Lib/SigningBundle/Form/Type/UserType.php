<?php

namespace Lib\SigningBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UserType extends AbstractType
{
    public function getName()
    {
        return 'user';
    }
    
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('username', 'text')
            ->add('password', 'password')
            ->add('firstname', 'text')
            ->add('lastname', 'text')
            ->add('phone', 'text')
            ->add('pesel', 'text')
            ->add('mydate', 'text')
            ->add('email', 'email')
            ->add('save', 'submit');
    }
    
    public function setDefaultOptions(OptionsResolverInterface $resolver) 
    {
        $resolver->setDefaults(array(
            'data_class' => 'Lib\SigningBundle\Entity\User'
        ));
    }
}