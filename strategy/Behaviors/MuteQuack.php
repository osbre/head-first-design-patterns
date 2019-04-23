<?php


namespace Strategy\Behaviors;


use Strategy\Interfaces\QuackBehavior;

class MuteQuack implements QuackBehavior
{
    public function quack()
    {
        echo "Don`t quack.\n";
    }
}