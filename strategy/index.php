<?php
require __DIR__.'/../vendor/autoload.php';


use Strategy\Ducks\{
    MallardDuck,
    DecoyDuck,
    RubberDuck
};
use Strategy\Behaviors\{
    FlyWithWings,
    FlyNoWay,
    Quack,
    Squeak,
    MuteQuack,
};

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