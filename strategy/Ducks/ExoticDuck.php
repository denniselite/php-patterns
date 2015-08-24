<?php
/**
 * Created by PhpStorm.
 * User: Denniselite
 * Date: 23.08.15
 * Time: 13:35
 */

namespace PhpPatterns\Strategy\Ducks;


use PhpPatterns\Strategy\Quack\ExoticQuack;

class ExoticDuck extends DuckBase
{
    public function __construct()
    {
        parent::__construct();
        $this->quackBehaviour = new ExoticQuack;
    }

    public function display()
    {
        echo "Hi! I'm a exotic duck!\n";
    }
}