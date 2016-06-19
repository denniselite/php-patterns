# PHP-patterns

Implementations some design patterns on PHP language.

It is a console package and it doesn't require some web servers for working. You can just started it :

`php index.php <pattern_name>` in the home project directory.

## Decorator design pattern

Example for design pattern **Decorator** with dynamic behaviours.

`decorator` - source folder of design pattern

`decorator/beverage` - base classes for basic subjects (coffee shop samples: espresso, black tea, etc)

`decorator/decorators` - decorators with different condiments for base subjects (milk, sugar, chocolate)

`decorator/Demo.php` - the demonstration class of decorator design pattern

## Strategy design pattern

Example for design pattern **Strategy** with dynamic behaviours.

`strategy` - source folder of design pattern

`strategy/ducks` - examples of different classes

`strategy/fly` - the *fly* behaviours with interfaces

`strategy/quack` - the *quack* behaviours with interfaces

`strategy/Demo.php` - the demonstration class of strategy design pattern

## Observer design pattern

Example for design pattern **Observer** with dynamic behaviours.

`observer` - source folder of design pattern

`observer/news` - aggregator of news (class + interface of subject)

`observer/widgets` - a different samples of news widgets. They subscribes to events from the aggregator.

`observer/Demo.php` - the demonstration class of observer design pattern