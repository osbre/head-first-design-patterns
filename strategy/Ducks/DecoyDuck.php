<?php

namespace Strategy\Ducks;

class DecoyDuck extends Duck
{
    public function display()
    {
        echo <<<EOL
     __
 ___( o)>
 \ <_. )
  `---'   Decoy duck

EOL;
    }
}
