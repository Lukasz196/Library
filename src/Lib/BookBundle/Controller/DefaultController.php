<?php

namespace Lib\BookBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('LibBookBundle:Default:index.html.twig', array('name' => $name));
    }
}
