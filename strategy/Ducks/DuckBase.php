<?php
/**
 * Created by PhpStorm.
 * User: Denniselite
 * Date: 23.08.15
 * Time: 13:35
 */

namespace PhpPatterns\Strategy\Ducks;


abstract class DuckBase{

    public function swim()
    {
        echo "I'm swimming\n";
    }

    public function display()
    {

    }
}