<?php

namespace Terwey\DoctrineStackBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class DoctrineStackBundle extends Bundle
{
    public function getParent()
    {
        return 'DoctrineBundle';
    }
}