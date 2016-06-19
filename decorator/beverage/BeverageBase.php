<?php
/**
 * Created by PhpStorm.
 * User: Denniselite
 * Date: 19.06.16
 * Time: 5:40
 */

namespace PhpPatterns\Decorator\Beverage;


abstract class BeverageBase
{

    /**
     * @var string
     */
    protected $description;

    /**
     * @var int
     */
    protected $milkPrice = 50;

    /**
     * @var int
     */
    protected $sugarPrice = 10;

    /**
     * @var int
     */
    protected $chocolatePrice = 70;

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return int
     */
    public function getCost()
    {
        $cost = 0;

        if ($this->hasMilk()) {
            $cost += $this->milkPrice;
        }

        if ($this->hasSugar()) {
            $cost += $this->sugarPrice;
        }

        if ($this->hasChocolate()) {
            $cost += $this->chocolatePrice;
        }

        return $cost;
    }

    /**
     * @return bool
     */
    abstract public function hasMilk();

    /**
     * @return bool
     */
    abstract public function hasSugar();

    /**
     * @return bool
     */
    abstract public function hasChocolate();
}