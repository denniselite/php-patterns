<?php
/**
 * Created by PhpStorm.
 * User: Denniselite
 * Date: 27.08.15
 * Time: 0:55
 */

namespace PhpPatterns\Observer\Widgets;


class TechCrunchWidget
{
    /**
     * @param $twitter string
     * @param $techCrunch string
     * @param $tv string
     */
    public function update($twitter, $techCrunch, $tv)
    {
        echo "TechCrunch: ".$techCrunch;
    }
}