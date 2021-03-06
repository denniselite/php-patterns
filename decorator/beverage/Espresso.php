<?php
/**
 * Created by PhpStorm.
 * User: Denniselite
 * Date: 19.06.16
 * Time: 5:45
 */

namespace PhpPatterns\Decorator\Beverage;


class Espresso extends BeverageBase
{

    public function __construct()
    {
        $this->description = "Small portion of strong coffee";
    }

    /**
     * @return int
     */
    public function getCost()
    {
        return 150;
    }
}