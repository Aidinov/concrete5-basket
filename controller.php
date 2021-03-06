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
namespace Concrete\Package\AidinovBasket;

use Package;
use BlockTypeSet;
use BlockType;
use Concrete\Core\Foundation\Service\ProviderList;
use Concrete\Core\Foundation\ClassAliasList;

class Controller extends Package
{
    protected $pkgAutoloaderRegistries = array(
        'vendor/aidinov/basket/src' => '\Aidinov\Basket',
        'src' => '\Aidinov\Concrete\Basket'
    );
    protected $pkgHandle = 'aidinov_basket';
    protected $appVersionRequired = '5.7';
    protected $pkgVersion = '1.0';

    public function getPackageDescription()
    {
        return t("Shopping basket");
    }

    public function getPackageName()
    {
        return t("Basket");
    }

    public function install()
    {
        $pkg = parent::install();

        if (!BlockTypeSet::getByHandle('basket')) {
            BlockTypeSet::add('basket', 'Basket', $pkg);
        }

        // install blocks
        BlockType::installBlockTypeFromPackage('aidinov_basket', $pkg);
    }

    public function on_start()
    {
        $list = $this->app->make('Concrete\Core\Foundation\Service\ProviderList');
        $list->registerProvider('\Aidinov\Concrete\Basket\BasketServiceProvider');

        $list = ClassAliasList::getInstance();
        $list->register('Basket', '\Aidinov\Concrete\Basket\Facades\Basket');
    }
}
