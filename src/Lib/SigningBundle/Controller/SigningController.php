<?php

namespace Lib\SigningBundle\Controller;
 
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Lib\SigningBundle\Entity\User;
use Lib\SigningBundle\Form\Type\UserType;

class SigningController extends Controller
{
    public function registerFormAction()
    {
        $user = new User();
        
        $form = $this->createForm(new UserType(), $user);

        return $this->render('LibSigningBundle:Signing:index.html.twig', array('form' => $form->createView(),));       
    }
}
