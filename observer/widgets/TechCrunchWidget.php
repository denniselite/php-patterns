<?php
/**
 * Created by PhpStorm.
 * User: Denniselite
 * Date: 27.08.15
 * Time: 0:55
 */

namespace PhpPatterns\Observer\Widgets;


use PhpPatterns\Observer\News\ISubject;

class TechCrunchWidget implements IObserver
{
    /**
     * @var string
     */
    private $techCrunch;

    /**
     * @param ISubject $subject
     */
    public function __construct($subject)
    {
        $subject->registerObserver($this);
    }
    /**
     * @param string $twitter
     * @param string $techCrunch
     * @param string $tv
     */
    public function update($twitter, $techCrunch, $tv)
    {
        $this->techCrunch = $techCrunch;
        $this->display();
    }

    public function display()
    {
        echo "TechCrunch: ".$this->techCrunch;
    }
}