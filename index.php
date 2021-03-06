<?php
/**
 * Created by PhpStorm.
 * User: Denniselite
 * Date: 23.08.15
 * Time: 13:22
 */

namespace PhpPatterns;

require_once('required.php');

use PhpPatterns;

if (count($argv) < 2) {
    readfile('README.md');
} else {
    switch ($argv[1]) {
        case "strategy" :
            echo "Strategy pattern demo\n";
            echo "=====================\n";
            $strategyDemo = new Strategy\Demo();
            $strategyDemo->run();
            break;
        case "observer" :
            echo "Observer pattern demo\n";
            echo "=====================\n";
            $observerDemo = new Observer\Demo();
            $observerDemo->run();
            break;
        case "decorator" :
            echo "Decorator pattern demo\n";
            echo "=====================\n";
            $observerDemo = new Decorator\Demo();
            $observerDemo->run();
            break;
        default:
            echo "Unknown command";
            break;
    }
}