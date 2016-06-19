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
    protected $description = '';

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
    abstract public function getCost();
}