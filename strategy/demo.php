<?php
/**
 * Created by PhpStorm.
 * User: Denniselite
 * Date: 23.08.15
 * Time: 12:51
 */

namespace PhpPatterns\Strategy;

use PhpPatterns\Strategy\Ducks\DuckBase;
use PhpPatterns\Strategy\Ducks\ExoticDuck;
use PhpPatterns\Strategy\Ducks\RubberDuck;
use PhpPatterns\Strategy\Ducks\SimpleDuck;
use PhpPatterns\Strategy\Ducks\UpgradableDuck;
use PhpPatterns\Strategy\Ducks\WoodenDuck;
use PhpPatterns\Strategy\Fly\FlyWithWings;
use PhpPatterns\Strategy\Quack\ExoticQuack;

class Demo
{
    public function run()
    {
        $ducksList = [];
        $ducksList[] = new SimpleDuck;
        $ducksList[] = new ExoticDuck;
        $ducksList[] = new WoodenDuck;
        $ducksList[] = new RubberDuck;

        /**
         * @var DuckBase $duck
         */
        foreach ($ducksList as $duck) {
            $duck->display();
            $duck->swim();
            $duck->quack();
            $duck->fly();
            echo "\n";
        }

        $upgradableDuck = new UpgradableDuck;
        $upgradableDuck->display();
        $upgradableDuck->swim();
        $upgradableDuck->quack();
        $upgradableDuck->fly();

        $upgradableDuck->setFlyBehaviour(new FlyWithWings);
        $upgradableDuck->setQuackBehaviour(new ExoticQuack);
        $upgradableDuck->quack();
        $upgradableDuck->fly();
    }
}