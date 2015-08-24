<?php
/**
 * Created by PhpStorm.
 * User: Denniselite
 * Date: 23.08.15
 * Time: 13:22
 */

namespace PhpPatterns;

require_once('required.php');

use PhpPatterns\Strategy;

$strategyDemo = new Strategy\Demo();
$strategyDemo->run();