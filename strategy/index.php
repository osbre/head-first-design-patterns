<?php

require __DIR__.'/../vendor/autoload.php';

use Strategy\Behaviors\FlyNoWay;
use Strategy\Behaviors\FlyWithWings;
use Strategy\Behaviors\MuteQuack;
use Strategy\Behaviors\Quack;
use Strategy\Behaviors\Squeak;
use Strategy\Ducks\DecoyDuck;
use Strategy\Ducks\MallardDuck;
use Strategy\Ducks\RubberDuck;

echo "Mallard duck: \n";

$duck = new MallardDuck(new FlyWithWings(), new Quack());
$duck->display();
$duck->performFly();
$duck->performQuack();

echo "Decoy duck: \n";
$duck = new DecoyDuck(new FlyNoWay(), new MuteQuack());
$duck->display();
$duck->performFly();
$duck->performQuack();

echo "Rubber duck: \n";
$duck = new RubberDuck(new FlyWithWings(), new Squeak());
$duck->display();
$duck->setFlyBehavior(new FlyNoWay());
$duck->performFly();
$duck->performQuack();
