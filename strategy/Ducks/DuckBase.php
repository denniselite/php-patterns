<?php
/**
 * Created by PhpStorm.
 * User: Denniselite
 * Date: 23.08.15
 * Time: 13:35
 */

namespace PhpPatterns\Strategy\Ducks;

use PhpPatterns\Strategy\Fly\IFlyable;
use PhpPatterns\Strategy\Quack\IQuackable;
use PhpPatterns\Strategy\Quack\SimpleQuack;
use PhpPatterns\Strategy\Fly\FlyWithWings;

abstract class DuckBase{

    /**
     * @var IFlyable $flyBehaviour
     */
    protected $flyBehaviour;

    /**
     * @var  IQuackable $flyBehaviour
     */
    protected $quackBehaviour;


    public function __construct(){
        $this->flyBehaviour = new FlyWithWings;
        $this->quackBehaviour = new SimpleQuack;
    }

    /**
     * @param IQuackable $quackBehaviour
     */
    public function setQuackBehaviour($quackBehaviour)
    {
        $this->quackBehaviour = $quackBehaviour;
    }

    /**
     * @param IFlyable $flyBehaviour
     */
    public function setFlyBehaviour($flyBehaviour)
    {
        $this->flyBehaviour = $flyBehaviour;
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