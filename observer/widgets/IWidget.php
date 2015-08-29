<?php
/**
 * Created by PhpStorm.
 * User: Denniselite
 * Date: 29.08.15
 * Time: 23:14
 */

namespace PhpPatterns\Observer\Widgets;


interface IWidget
{
    /**
     * @param $twitter string
     * @param $techCrunch string
     * @param $tv string
     * @return mixed
     */
    public function update($twitter, $techCrunch, $tv);
    public function display();
}