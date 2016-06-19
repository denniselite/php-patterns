<?php
/**
 * Created by PhpStorm.
 * User: Denniselite
 * Date: 27.08.15
 * Time: 1:11
 */

namespace PhpPatterns\Observer;

use PhpPatterns\Observer\News\NewsAggregator;
use PhpPatterns\Observer\Widgets\TechCrunchWidget;
use PhpPatterns\Observer\Widgets\TvWidget;
use PhpPatterns\Observer\Widgets\TwitterWidget;

class Demo
{
    public function run()
    {
        $newsAggregator = new NewsAggregator;
        $techCrunchWidget = new TechCrunchWidget($newsAggregator);
        $tvWidget = new TvWidget($newsAggregator);
        $twitterWidget = new TwitterWidget($newsAggregator);

        $newsAggregator->newNewAvailable();
        echo "\n";
        $twitterWidget->removeFromSubject();
        $newsAggregator->newNewAvailable();
        echo "\n";
    }
}