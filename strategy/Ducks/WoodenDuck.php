<?php
/**
 * Created by PhpStorm.
 * User: Denniselite
 * Date: 23.08.15
 * Time: 14:00
 */

namespace PhpPatterns\Strategy\Ducks;


class WoodenDuck extends DuckBase
{
    public function display()
    {
        echo "Hi! I'm a wooden duck!\n";
    }
}