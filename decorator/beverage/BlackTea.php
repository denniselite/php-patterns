<?php
/**
 * Created by PhpStorm.
 * User: Denniselite
 * Date: 19.06.16
 * Time: 5:48
 */

namespace PhpPatterns\Decorator\Beverage;


class BlackTea extends BeverageBase
{

    public function __construct()
    {
        $this->description = "Black tea from teabug";
    }

    /**
     * @return int
     */
    public function getCost()
    {
        return 25 + parent::getCost();
    }
    
    /**
     * @return bool
     */
    public function hasMilk()
    {
        return false;
    }

    /**
     * @return bool
     */
    public function hasSugar()
    {
        return false;
    }

    /**
     * @return bool
     */
    public function hasChocolate()
    {
        return false;
    }
}