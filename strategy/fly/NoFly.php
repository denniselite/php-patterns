<?php
/**
 * Created by PhpStorm.
 * User: Denniselite
 * Date: 24.08.15
 * Time: 23:06
 */

namespace PhpPatterns\Strategy\Fly;

class NoFly implements IFlyable
{
    public function fly()
    {
        echo "---\n";
    }
}