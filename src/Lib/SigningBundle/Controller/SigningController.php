<?php

namespace Lib\SigningBundle\Controller;
 
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Lib\SigningBundle\Entity\User;
use Lib\SigningBundle\Form\Type\UserType;

class SigningController extends Controller
{
    public function registerFormAction(Request $request)
    {
        $user = new User();
        
        $form = $this->createForm(new UserType(), $user);

        $form->handleRequest($request);
        
        if($form->isValid())
        {
           $user->setActive(true);
           $user->setIdRole(1);
           
           $time = strtotime($user->mydate);
           $newformat = date('Y-m-d',$time);
           $user->setBirthdate(new \DateTime($newformat));
            
           $em = $this->getDoctrine()->getManager();
           $em->persist($user);
           $em->flush();

           return $this->render('LibSigningBundle:Signing:succesRegister.html.twig');
        }
        else return $this->render('LibSigningBundle:Signing:index.html.twig', array('form' => $form->createView(),));       
    }    
}
