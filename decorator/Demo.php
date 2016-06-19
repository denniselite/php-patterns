<?php
/**
 * Created by PhpStorm.
 * User: Denniselite
 * Date: 19.06.16
 * Time: 6:25
 */

namespace PhpPatterns\Decorator;


use PhpPatterns\Decorator\Beverage\Capuccino;
use PhpPatterns\Decorator\Beverage\Espresso;
use PhpPatterns\Decorator\Beverage\HotChocolate;

class Demo
{
    public function run()
    {
        $capuccino = new Capuccino;
        $hotChocolate = new HotChocolate;
        $espresso = new Espresso;

        printf("Beverage: %s; Price: %d \n", $capuccino->getDescription(), $capuccino->getCost());
        printf("Beverage: %s; Price: %d \n", $hotChocolate->getDescription(), $hotChocolate->getCost());
        printf("Beverage: %s; Price: %d \n", $espresso->getDescription(), $espresso->getCost());
    }
}