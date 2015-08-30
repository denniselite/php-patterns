<?php
/**
 * Created by PhpStorm.
 * User: Denniselite
 * Date: 27.08.15
 * Time: 0:46
 */

namespace PhpPatterns\Observer\Widgets;


use PhpPatterns\Observer\News\ISubject;

class TvWidget implements IObserver
{
    /**
     * @var string
     */
    private $tv;

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
        $this->tv = $tv;
        $this->display();
    }

    public function display()
    {
        echo "TV: ".$this->tv;
    }
}