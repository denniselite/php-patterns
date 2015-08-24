<?php
/**
 * Created by PhpStorm.
 * User: Denniselite
 * Date: 23.08.15
 * Time: 12:51
 */

namespace PhpPatterns\Strategy;


require_once('fly/IFlyable.php');
require_once('fly/FlyWithWings.php');
require_once('fly/NoFly.php');
require_once('quack/IQuackable.php');
require_once('quack/SimpleQuack.php');
require_once('quack/ExoticQuack.php');
require_once('quack/NoQuack.php');
require_once('ducks/DuckBase.php');
require_once('ducks/SimpleDuck.php');
require_once('ducks/ExoticDuck.php');
require_once('ducks/WoodenDuck.php');
require_once('ducks/RubberDuck.php');
require_once('ducks/UpgradableDuck.php');

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
        array_push($ducksList, (new SimpleDuck));
        array_push($ducksList, (new ExoticDuck));
        array_push($ducksList, (new WoodenDuck));
        array_push($ducksList, (new RubberDuck));

        /**
         * @var $duck DuckBase
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