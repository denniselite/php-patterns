<?php
/**
 * Created by PhpStorm.
 * User: Denniselite
 * Date: 19.06.16
 * Time: 7:19
 */

namespace PhpPatterns\Decorator\Beverage;


class GreenTea extends BeverageBase
{
    public function __construct()
    {
        $this->description = "Green leaf tea";
    }

    /**
     * @return int
     */
    public function getCost()
    {
        return 125;
    }
}