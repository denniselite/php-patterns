<?php
/**
 * Created by PhpStorm.
 * User: Denniselite
 * Date: 27.08.15
 * Time: 0:53
 */

namespace PhpPatterns\Observer\Widgets;


use PhpPatterns\Observer\News\ISubject;

class TwitterWidget implements IObserver
{
    /**
     * @var string
     */
    private $twitter;

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
        $this->twitter = $twitter;
        $this->display();
    }

    public function display()
    {
        echo "Twitter: ".$this->twitter;
    }
}