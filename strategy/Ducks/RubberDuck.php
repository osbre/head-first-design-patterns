<?php

namespace Strategy\Ducks;

class RubberDuck extends Duck
{
    public function display()
    {
        echo <<<EOL
    _ 
 __(.)< 
 \___)  Rubber duck!

EOL;
    }
}
