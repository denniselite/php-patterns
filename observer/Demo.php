<?php
/**
 * Created by PhpStorm.
 * User: Denniselite
 * Date: 27.08.15
 * Time: 1:11
 */

namespace PhpPatterns\Observer;

use PhpPatterns\Observer\News\NewsAggregator;

class Demo
{
    public function run()
    {
        $newsAggregator = new NewsAggregator;

        $newsAggregator->newNewAvailable();
        echo "\n";
        $newsAggregator->newNewAvailable();
    }
}