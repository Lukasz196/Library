<?php

namespace Lib\SigningBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ProfileFormType extends AbstractType
{
    public function getName()
    {
        return 'user_profile';
    }
    
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('phone', 'text')
            ->remove('username');
    }
    
    public function getParent()
    {
        return 'fos_user_profile';
    }    
}