<?php

namespace Lib\BookBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class AuthorType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {

        $authors = $builder
                ->add('firstname')
                ->add('secondname')
                ->add('lastname')
                ->add('save', 'submit');
    }

    public function getName() {
        return 'author';
    }

}
