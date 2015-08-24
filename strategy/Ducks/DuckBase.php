<?php
/**
 * Created by PhpStorm.
 * User: Denniselite
 * Date: 23.08.15
 * Time: 13:35
 */

namespace PhpPatterns\Strategy\Ducks;

use PhpPatterns\Strategy\Quack\SimpleQuack;
use PhpPatterns\Strategy\Fly\FlyWithWings;

abstract class DuckBase{

    /**
     * @var $flyBehaviour FlyWithWings
     */
    protected $flyBehaviour;

    /**
     * @var $flyBehaviour SimpleQuack
     */
    protected $quackBehaviour;


    public function __construct(){
        $this->flyBehaviour = new FlyWithWings;
        $this->quackBehaviour = new SimpleQuack;
    }

    public function quack()
    {
        $this->quackBehaviour->quack();
    }

    public function swim()
    {
        echo "I'm swimming\n";
    }


    public function fly()
    {
        $this->flyBehaviour->fly();
    }

    public function display()
    {

    }

}