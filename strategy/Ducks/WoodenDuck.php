<?php
/**
 * Created by PhpStorm.
 * User: Denniselite
 * Date: 23.08.15
 * Time: 14:00
 */

namespace PhpPatterns\Strategy\Ducks;

use PhpPatterns\Strategy\Fly\NoFly;
use PhpPatterns\Strategy\Quack\NoQuack;

class WoodenDuck extends DuckBase
{

    public function __construct()
    {
        parent::__construct();
        $this->flyBehaviour = new NoFly;
        $this->quackBehaviour = new NoQuack;
    }

    public function display()
    {
        echo "Hi! I'm a wooden duck!\n";
    }
}