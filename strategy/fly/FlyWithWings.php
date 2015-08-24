<?php
/**
 * Created by PhpStorm.
 * User: Denniselite
 * Date: 24.08.15
 * Time: 22:17
 */

namespace PhpPatterns\Strategy\Fly;


class FlyWithWings implements IFlyable
{
    public function fly(){
        echo "I'm flying with my wings\n";
    }
}