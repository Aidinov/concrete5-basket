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
namespace Aidinov\Concrete\Basket\Facades;

use Concrete\Core\Support\Facade\Facade;

class Basket extends Facade
{
    public static function getFacadeAccessor()
    {
        return 'basket';
    }
}
