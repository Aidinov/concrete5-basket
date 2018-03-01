<?php
/**
 * PHP version 7 package to handle your shopping basket for concrete5.
 *
 * @author    Andrei Aidinov <aidinov.andrey@gmail.com>
 * @copyright 2018 Aidinov
 * @license   Apache 2.0
 * @version   GIT: <git_id> In development.
 * @link      https://github.com/Aidinov/concrete5-basket
 */
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
