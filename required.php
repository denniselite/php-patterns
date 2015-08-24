<?php
/**
 * Created by PhpStorm.
 * User: Denniselite
 * Date: 25.08.15
 * Time: 0:08
 */

require_once('strategy/Demo.php');
require_once('strategy/fly/IFlyable.php');
require_once('strategy/fly/FlyWithWings.php');
require_once('strategy/fly/NoFly.php');
require_once('strategy/quack/IQuackable.php');
require_once('strategy/quack/SimpleQuack.php');
require_once('strategy/quack/ExoticQuack.php');
require_once('strategy/quack/NoQuack.php');
require_once('strategy/ducks/DuckBase.php');
require_once('strategy/ducks/SimpleDuck.php');
require_once('strategy/ducks/ExoticDuck.php');
require_once('strategy/ducks/WoodenDuck.php');
require_once('strategy/ducks/RubberDuck.php');
require_once('strategy/ducks/UpgradableDuck.php');