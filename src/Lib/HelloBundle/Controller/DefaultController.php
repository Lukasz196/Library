<?php

namespace Lib\HelloBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('LibHelloBundle:Default:index.html.twig');
    }
}