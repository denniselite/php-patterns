<?php
/**
 * Created by PhpStorm.
 * User: Denniselite
 * Date: 27.08.15
 * Time: 0:45
 */

namespace PhpPatterns\Observer\News;


use PhpPatterns\Observer\Widgets\IObserver;

class NewsAggregator implements ISubject
{

    /**
     * @var []
     */
    private $observers;

    public function __construct()
    {
        $this->observers = [];
    }

    /**
     * @param IObserver $observer
     */
    public function registerObserver($observer)
    {
        $this->observers[] = $observer;
    }

    /**
     * @param IObserver $observer
     */
    public function removeObserver($observer)
    {
        if ($key = array_search($observer, $this->observers)) {
            unset($this->observers[$key]);
        }
    }

    public function notifyObservers()
    {

        $techCrunch = $this->getTechCrunchNews();
        $tv = $this->getTvNews();
        $twitter = $this->getTwitterNews();

        /**
         * @var IObserver $observer
         */
        foreach ($this->observers as &$observer) {
            $observer->update($twitter, $techCrunch, $tv);
        }
    }

    /**
     * @return string
     */
    public function getTechCrunchNews()
    {
        $news = [
            "First article on TechCrunch\n",
            "Second article on TechCrunch\n",
            "Third article on TechCrunch\n"
        ];
        return $news[rand(0, 2)];
    }

    /**
     * @return string
     */
    public function getTvNews()
    {
        $news = [
            "First article on TV\n",
            "Second article on TV\n",
            "Third article on TV\n"
        ];
        return $news[rand(0, 2)];
    }

    /**
     * @return string
     */
    public function getTwitterNews()
    {
        $news = [
            "First article on Twitter\n",
            "Second article on Twitter\n",
            "Third article on Twitter\n"
        ];
        return $news[rand(0, 2)];
    }

    public function newNewAvailable()
    {
        $this->notifyObservers();
    }
}