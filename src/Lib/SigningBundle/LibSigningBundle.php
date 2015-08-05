<?php

namespace Lib\SigningBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class LibSigningBundle extends Bundle
{
    public function getParent() 
    {
        return 'FOSUserBundle';
    }
}
