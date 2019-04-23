<?php

namespace Strategy\Behaviors;

use Strategy\Interfaces\QuackBehavior;

class Quack implements QuackBehavior
{
    public function quack()
    {
        echo "Quack!\n";
    }
}
