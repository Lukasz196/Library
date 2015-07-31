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
            ->add('username', 'text', array(
                    'label' => 'Nazwa użytkownika'
                ))
            ->add('password', 'text', array(
                    'label' => 'Hasło'
                ))
            ->add('firstname', 'text', array(
                    'label' => 'Imię'
                ))
            ->add('lastname', 'text', array(
                    'label' => 'Nazwisko'
                ))
            ->add('phone', 'text', array(
                    'label' => 'Nr tel.'
                ))
            ->add('birthdate', 'text', array(
                    'label' => 'Data urodzenia'
                ))
            ->add('email', 'text', array(
                    'label' => 'E-mail'
                ))
            ->add('save', 'submit', array(
                    'label' => 'Zarejestruj się'
                ));
    }
    
    public function setDefaultOptions(OptionsResolverInterface $resolver) 
    {
        $resolver->setDefaults(array(
            'data_class' => 'Lib\SigningBundle\Entity\User'
        ));
    }
}