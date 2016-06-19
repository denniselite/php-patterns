<?php
/**
 * Created by PhpStorm.
 * User: Denniselite
 * Date: 25.08.15
 * Time: 0:08
 */

/**
 * Decorator required source files
 */
require_once('decorator/Demo.php');
require_once('decorator/beverage/BeverageBase.php');
require_once('decorator/beverage/BlackTea.php');
require_once('decorator/beverage/Capuccino.php');
require_once('decorator/beverage/Espresso.php');
require_once('decorator/beverage/HotChocolate.php');

/**
 * Observer required source files
 */
require_once('observer/Demo.php');
require_once('observer/news/ISubject.php');
require_once('observer/news/NewsAggregator.php');
require_once('observer/widgets/IObserver.php');
require_once('observer/widgets/IWidget.php');
require_once('observer/widgets/TechCrunchWidget.php');
require_once('observer/widgets/TvWidget.php');
require_once('observer/widgets/TwitterWidget.php');

/**
 * Strategy required source files
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