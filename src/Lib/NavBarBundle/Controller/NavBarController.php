<?php

namespace Lib\NavBarBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Cookie;
use Symfony\Component\HttpFoundation\Response;

class NavBarController extends Controller
{
    public function indexAction()
    {      
        $request = $this->get('request');
        $cookies = $request->cookies;

        $navBarOnTop = 'true';
        
        if ($cookies->has('navBarOnTop'))
        {
            $my_coockie = $cookies->get('navBarOnTop');
            if ($my_coockie == 'true')
            {
                $navBarOnTop = 'false';
            }
        }        

        $response = new Response();
        $response->headers->setCookie(new Cookie('navBarOnTop', $navBarOnTop));
        //$response->sendHeaders();
        //$url = $this->generateUrl('lib_hello_homepage',array(), $response);
        //return $this->redirect($url);
        
        
        //$response = new Response();
        
        //$response->headers->setCookie(new Cookie('navBarOnTop', 'true'));
        
        //$url = $this->generateUrl('lib_hello_homepage',array(), $response);
        return $response;
        
        //return $this->render(lib_hello_homepage, array(), $response);
    }
}
