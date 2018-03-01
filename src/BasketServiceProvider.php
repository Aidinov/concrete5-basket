<?php

namespace Aidinov\Concrete\Basket;

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
