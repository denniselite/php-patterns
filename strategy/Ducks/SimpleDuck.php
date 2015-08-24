<?php
/**
 * Created by PhpStorm.
 * User: Denniselite
 * Date: 23.08.15
 * Time: 13:37
 */

namespace PhpPatterns\Strategy\Ducks;


class SimpleDuck extends DuckBase
{
    public function display()
    {
        echo "Hi! I'm a simple duck!\n";
    }
}