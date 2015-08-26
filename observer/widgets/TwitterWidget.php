<?php
/**
 * Created by PhpStorm.
 * User: Denniselite
 * Date: 27.08.15
 * Time: 0:53
 */

namespace PhpPatterns\Observer\Widgets;

class TwitterWidget
{
    /**
     * @param $twitter string
     * @param $techCrunch string
     * @param $tv string
     */
    public function update($twitter, $techCrunch, $tv)
    {
        echo "Twitter: ".$twitter;
    }
}