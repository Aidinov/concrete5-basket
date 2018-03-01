<?php

namespace Aidinov\Concrete\Basket\Facades;

use Concrete\Core\Support\Facade\Facade;

class Basket extends Facade
{
    public static function getFacadeAccessor()
    {
        return 'basket';
    }
}
