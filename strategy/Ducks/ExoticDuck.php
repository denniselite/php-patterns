<?php
/**
 * Created by PhpStorm.
 * User: Denniselite
 * Date: 23.08.15
 * Time: 13:35
 */

namespace PhpPatterns\Strategy\Ducks;


class ExoticDuck extends DuckBase
{
    public function display()
    {
        echo "Hi! I'm a exotic duck!\n";
    }
}