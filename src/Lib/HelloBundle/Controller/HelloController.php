<?php

namespace Lib\HelloBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HelloController extends Controller
{
    public function indexAction()
    {
        return $this->render('LibHelloBundle:Hello:index.html.twig');
    }
}
