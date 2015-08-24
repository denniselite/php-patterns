<?php
/**
 * Created by PhpStorm.
 * User: Denniselite
 * Date: 24.08.15
 * Time: 23:07
 */

namespace PhpPatterns\Strategy\Quack;


class NoQuack implements IQuackable
{
    public function quack()
    {
        echo "...\n";
    }
}