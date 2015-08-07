<?php

namespace Lib\BookBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Lib\BookBundle\Form\Type\PublisherType;
use Lib\BookBundle\Form\Type\GenreType;

class BookType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {

        $genres = $builder
                ->add('title')
                ->add('isbn')
                ->add('publishYear')
                ->add('publishPlace')
                ->add('language')
                ->add('paperback')
                ->add('amount')
                ->add('cover', 'file', array('multiple' => FALSE))
                ->add('description')
                ->add('publisher', 'entity', array('class' => 'LibBookBundle:Publisher'))
                ->add('genres', 'entity', array('class' => 'LibBookBundle:Genre', 'multiple' => TRUE))
                ->add('authors', 'entity', array('class' => 'LibBookBundle:Author', 'multiple' => TRUE))
                ->add('save', 'submit');
    }

    public function getName() {
        return 'book';
    }

}
