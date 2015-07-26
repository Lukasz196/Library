<?php

namespace Lib\NavBarBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Cookie;
use Symfony\Component\HttpFoundation\Response;

class NavBarController extends Controller {

    public function isNavBarPinnedAction() {
        $request = $this->get('request');
        $cookies = $request->cookies;

        $navBarOnTop = 'true';

        if ($cookies->has('navBarOnTop')) {
            $my_coockie = $cookies->get('navBarOnTop');
            if ($my_coockie == 'true') {
                $navBarOnTop = 'false';
            }
        }

        $response = new Response($navBarOnTop);
        $response->headers->setCookie(new Cookie('navBarOnTop', $navBarOnTop, time() + (10 * 365 * 24 * 3600)));

        return $response;
    }

}
