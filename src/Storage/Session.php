<?php

namespace Aidinov\Concrete\Basket\Storage;

use Aidinov\Basket\Storage\Runtime;
use Aidinov\Basket\StorageInterface;
use Session as SessionConcrete;

class Session extends Runtime implements StorageInterface
{
    public function __construct()
    {
        if (SessionConcrete::has('c5basket')) {
            self::$storage = SessionConcrete::get('c5basket');
        }
    }

    public function save()
    {
        $basket = self::$storage;
        SessionConcrete::set('c5basket', $basket);
    }
}
