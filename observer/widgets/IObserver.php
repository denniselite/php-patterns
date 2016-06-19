<?php
/**
 * Created by PhpStorm.
 * User: Denniselite
 * Date: 29.08.15
 * Time: 23:14
 */

namespace PhpPatterns\Observer\Widgets;


interface IObserver
{
    /**
     * @param string $twitter
     * @param string $techCrunch
     * @param string $tv
     */
    public function update($twitter, $techCrunch, $tv);

    public function removeFromSubject();
}