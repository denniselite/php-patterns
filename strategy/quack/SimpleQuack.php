<?php
/**
 * Created by PhpStorm.
 * User: Denniselite
 * Date: 24.08.15
 * Time: 22:16
 */

namespace PhpPatterns\Strategy\Quack;


class SimpleQuack implements IQuackable
{
    public function quack()
    {
        echo "Quack! Quack!\n";
    }
}