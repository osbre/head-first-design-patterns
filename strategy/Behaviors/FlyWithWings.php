<?php


namespace Strategy\Behaviors;


use Strategy\Interfaces\FlyBehavior;

class FlyWithWings implements FlyBehavior
{
    public function fly()
    {
        echo "This duck is flying with wings!\n";
    }
}