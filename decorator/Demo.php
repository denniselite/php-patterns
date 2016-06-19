<?php
/**
 * Created by PhpStorm.
 * User: Denniselite
 * Date: 19.06.16
 * Time: 6:25
 */

namespace PhpPatterns\Decorator;


use PhpPatterns\Decorator\Beverage\BeverageBase;
use PhpPatterns\Decorator\Beverage\BlackTea;
use PhpPatterns\Decorator\Beverage\Capuccino;
use PhpPatterns\Decorator\Beverage\Espresso;
use PhpPatterns\Decorator\Beverage\GreenTea;
use PhpPatterns\Decorator\Beverage\HotChocolate;
use PhpPatterns\Decorator\Decorators\MilkCondiment;
use PhpPatterns\Decorator\Decorators\SugarCondiment;

class Demo
{
    public function run()
    {
        $espresso = new Espresso;
        $blackTea = new BlackTea;
        $greenTea = new GreenTea;

        static::printBeverage($espresso);
        static::printBeverage($blackTea);
        static::printBeverage($greenTea);
        echo "---------------------\n";

        $cappuccino = new SugarCondiment(new MilkCondiment(new Espresso));
        static::printBeverage($cappuccino);

        $greenTeaWithSugar = new SugarCondiment(new GreenTea);
        static::printBeverage($greenTeaWithSugar);
    }

    /**
     * @param BeverageBase $beverage
     */
    public static function printBeverage($beverage)
    {
        printf("Beverage: %s; Price: %d \n", $beverage->getDescription(), $beverage->getCost());
    }
}