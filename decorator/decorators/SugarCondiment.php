<?php
/**
 * Created by PhpStorm.
 * User: Denniselite
 * Date: 19.06.16
 * Time: 7:09
 */

namespace PhpPatterns\Decorator\Decorators;


use PhpPatterns\Decorator\Beverage\BeverageBase;

class SugarCondiment extends CondimentsDecoratorBase
{

    /**
     * @var BeverageBase
     */
    private $_beverage;

    /**
     * MilkCondiment constructor.
     * @param BeverageBase $beverage
     */
    public function __construct($beverage)
    {
        $this->_beverage = $beverage;
        $this->description = $this->_beverage->getDescription() . ' +Sugar';
    }

    /**
     * @return int
     */
    public function getCost()
    {
        return $this->_beverage->getCost() + 10;
    }

}