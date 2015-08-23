<?php
/**
 * Created by PhpStorm.
 * User: Denniselite
 * Date: 23.08.15
 * Time: 13:37
 */

namespace PhpPatterns\Strategy\Ducks;


class SimpleDuck extends DuckBase implements IQuackable, IFlyable
{
    public function display()
    {
        echo "Hi! I'm a simple duck!\n";
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