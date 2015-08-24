<?php
/**
 * Created by PhpStorm.
 * User: Denniselite
 * Date: 24.08.15
 * Time: 23:31
 */

namespace PhpPatterns\Strategy\Ducks;


use PhpPatterns\Strategy\Fly\NoFly;
use PhpPatterns\Strategy\Quack\NoQuack;

class UpgradableDuck extends DuckBase
{
    public function __construct()
    {
        parent::__construct();
        $this->flyBehaviour = new NoFly;
        $this->quackBehaviour = new NoQuack;
    }
    public function display()
    {
        echo "I'm an upgradable duck!\n";
    }
}