<?php

namespace Strategy\Behaviors;

use Strategy\Interfaces\QuackBehavior;

class Squeak implements QuackBehavior
{
    public function quack()
    {
        echo "Squeak!\n";
    }
}
