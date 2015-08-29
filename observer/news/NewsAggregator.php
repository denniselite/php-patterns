<?php
/**
 * Created by PhpStorm.
 * User: Denniselite
 * Date: 27.08.15
 * Time: 0:45
 */

namespace PhpPatterns\Observer\News;


use PhpPatterns\Observer\Widgets\TechCrunchWidget;
use PhpPatterns\Observer\Widgets\TvWidget;
use PhpPatterns\Observer\Widgets\TwitterWidget;

class NewsAggregator
{

    /**
     * @var TechCrunchWidget
     */
    private $_techCrunchWidget;

    /**
     * @var TvWidget
     */
    private $_tvWidget;

    /**
     * @var TwitterWidget
     */
    private $_twitterWidget;

    public function __construct()
    {
        $this->_techCrunchWidget = new TechCrunchWidget;
        $this->_tvWidget = new TvWidget;
        $this->_twitterWidget = new TwitterWidget;
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
    public function getTwitterhNews()
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
        $techCrunch = $this->getTechCrunchNews();
        $tv = $this->getTvNews();
        $twitter = $this->getTwitterhNews();

        $this->_techCrunchWidget->update($twitter, $techCrunch, $tv);
        $this->_tvWidget->update($twitter, $techCrunch, $tv);
        $this->_twitterWidget->update($twitter, $techCrunch, $tv);
    }
}