<?php
/**
 * Created by PhpStorm.
 * User: Denniselite
 * Date: 19.06.16
 * Time: 6:16
 */

namespace PhpPatterns\Decorator\Beverage;


class HotChocolate extends BeverageBase
{

    public function __construct()
    {
        $this->description = 'Sweet hot chocolate';
    }

    /**
     * @return int
     */
    public function getCost()
    {
        return 150 + parent::getCost();
    }

    /**
     * @return bool
     */
    public function hasMilk()
    {
        return true;
    }

    /**
     * @return bool
     */
    public function hasSugar()
    {
        return true;
    }

    /**
     * @return bool
     */
    public function hasChocolate()
    {
        return true;
    }
}