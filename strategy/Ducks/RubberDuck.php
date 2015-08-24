<?php
/**
 * Created by PhpStorm.
 * User: Denniselite
 * Date: 23.08.15
 * Time: 14:06
 */

namespace PhpPatterns\Strategy\Ducks;

use PhpPatterns\Strategy\Fly\NoFly;

class RubberDuck extends DuckBase
{
    public function __construct()
    {
        parent::__construct();
        $this->flyBehaviour = new NoFly;
    }

    public function display()
    {
        echo "Hi! I'm a rubber duck!\n";
    }
}