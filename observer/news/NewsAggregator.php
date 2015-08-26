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
            'First article on TechCrunch',
            'Second article on TechCrunch',
            'Third article on TechCrunch',
        ];
        return $news[rand(0, 2)];
    }

    /**
     * @return string
     */
    public function getTvNews()
    {
        $news = [
            'First article on TV',
            'Second article on TV',
            'Third article on TV',
        ];
        return $news[rand(0, 2)];
    }

    /**
     * @return string
     */
    public function getTwitterhNews()
    {
        $news = [
            'First article on Twitter',
            'Second article on Twitter',
            'Third article on Twitter',
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