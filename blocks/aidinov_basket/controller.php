<?php
/**
 * PHP version 7 package to handle your shopping basket for concrete5.
 * Basket block
 *
 * @author    Andrei Aidinov <aidinov.andrey@gmail.com>
 * @copyright 2018 Aidinov
 * @license   Apache 2.0
 * @version   GIT: <git_id> In development.
 * @link      https://github.com/Aidinov/concrete5-basket
 */
namespace Concrete\Package\AidinovBasket\Block\AidinovBasket;

use Concrete\Core\Block\BlockController;

class Controller extends BlockController
{
    protected $btInterfaceWidth = 300;
    protected $btInterfaceHeight = 320;
    protected $btTable = 'btAidinovBasket';
    protected $btDefaultSet = 'basket';

    /**
     * Used for localization. If we want to localize the name/description we have to include this.
     */
    public function getBlockTypeDescription()
    {
        return t("Display the shopping basket.");
    }

    public function getBlockTypeName()
    {
        return t("Basket");
    }
}
