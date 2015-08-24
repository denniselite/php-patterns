<?php
/**
 * Created by PhpStorm.
 * User: Denniselite
 * Date: 24.08.15
 * Time: 23:19
 */

namespace PhpPatterns\Strategy\Quack;


class ExoticQuack implements IQuackable
{
    public function quack()
    {
        echo "Exotic quack! Exotic quack!\n";
    }
}