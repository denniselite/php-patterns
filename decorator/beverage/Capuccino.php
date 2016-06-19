<?php
/**
 * Created by PhpStorm.
 * User: Denniselite
 * Date: 19.06.16
 * Time: 5:50
 */

namespace PhpPatterns\Decorator\Beverage;


class Capuccino extends BeverageBase
{

    public function __construct()
    {
        $this->description = 'Coffee with steamed milk';
    }

    /**
     * @return int
     */
    public function getCost()
    {
        return 100 + parent::getCost();
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
        return false;
    }
}