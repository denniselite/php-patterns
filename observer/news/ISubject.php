<?php
/**
 * Created by PhpStorm.
 * User: Denniselite
 * Date: 30.08.15
 * Time: 3:22
 */

namespace PhpPatterns\Observer\News;


use PhpPatterns\Observer\Widgets\IObserver;

interface ISubject
{
    /**
     * @param IObserver $observer
     */
    public function registerObserver($observer);

    /**
     * @param IObserver $observer
     */
    public function removeObserver($observer);

    public function notifyObservers();
}