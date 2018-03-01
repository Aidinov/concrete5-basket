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
namespace Aidinov\Concrete\Basket;

use Aidinov\Basket\Basket;
use Aidinov\Concrete\Basket\Storage\Session as SessionStorage;
use Concrete\Core\Foundation\Service\Provider as ServiceProvider;

class BasketServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton('basket', function () {
            return new Basket(new SessionStorage());
        });
    }
}
