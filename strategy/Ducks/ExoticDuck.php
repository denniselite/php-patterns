<?php
/**
 * Created by PhpStorm.
 * User: Denniselite
 * Date: 23.08.15
 * Time: 13:35
 */

namespace PhpPatterns\Strategy\Ducks;


class ExoticDuck extends DuckBase implements IQuackable, IFlyable
{
    public function display()
    {
        echo "Hi! I'm a exotic duck!\n";
    }

    public function quack()
    {
        echo "Quack! Quack!\n";
    }

    public function fly()
    {
        echo "I'm flying!\n";
    }
}