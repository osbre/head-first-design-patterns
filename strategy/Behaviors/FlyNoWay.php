<?php


namespace Strategy\Behaviors;


use Strategy\Interfaces\FlyBehavior;

class FlyNoWay implements FlyBehavior
{
    public function fly()
    {
        echo "Sorry, this duck can't fly.\n";
    }
}