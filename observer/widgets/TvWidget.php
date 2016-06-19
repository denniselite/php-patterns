<?php
/**
 * Created by PhpStorm.
 * User: Denniselite
 * Date: 27.08.15
 * Time: 0:46
 */

namespace PhpPatterns\Observer\Widgets;


use PhpPatterns\Observer\News\ISubject;

class TvWidget implements IObserver, IWidget
{
    /**
     * @var string
     */
    private $_tv;

    /**
     * @var ISubject
     */
    private $_subject;

    /**
     * @param ISubject $subject
     */
    public function __construct($subject)
    {
        $this->_subject = $subject;
        $this->_subject->registerObserver($this);
    }
    /**
     * @param string $twitter
     * @param string $techCrunch
     * @param string $tv
     */
    public function update($twitter, $techCrunch, $tv)
    {
        $this->_tv = $tv;
        $this->display();
    }

    public function display()
    {
        echo "TV: ".$this->_tv;
    }

    public function removeFromSubject()
    {
        $this->_subject->removeObserver($this);
    }
}