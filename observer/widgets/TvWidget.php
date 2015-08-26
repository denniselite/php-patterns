<?php
/**
 * Created by PhpStorm.
 * User: Denniselite
 * Date: 27.08.15
 * Time: 0:46
 */

namespace PhpPatterns\Observer\Widgets;


class TvWidget
{
    /**
     * @param $twitter string
     * @param $techCrunch string
     * @param $tv string
     */
    public function update($twitter, $techCrunch, $tv)
    {
        echo "TV: ".$tv;
    }
}