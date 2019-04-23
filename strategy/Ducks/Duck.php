<?php

namespace Strategy\Ducks;

use Strategy\Interfaces\FlyBehavior;
use Strategy\Interfaces\QuackBehavior;

class Duck
{
    private $flyBehaviour;

    private $quackBehaviour;

    public function __construct(FlyBehavior $flyBehavior, QuackBehavior $quackBehavior)
    {
        $this->flyBehaviour = $flyBehavior;
        $this->quackBehaviour = $quackBehavior;
    }

    public function swim()
    {
        echo "Duck can swim! **splash of water**";
    }

    public function display()
    {
        echo <<<EOL
       ,~~.
      (  6 )-_,
 (\___ )=='-'
  \ .   ) )
   \ `-' /    Duck!
~'`~'`~'`~'`~

EOL;
    }

    public function performQuack()
    {
        return $this->quackBehaviour->quack();
    }

    public function performFly()
    {
        return $this->flyBehaviour->fly();
    }

    public function setFlyBehavior(FlyBehavior $flyBehavior)
    {
        $this->flyBehaviour = $flyBehavior;
    }

    public function setQuackBehavior(QuackBehavior $quackBehavior)
    {
        $this->quackBehaviour = $quackBehavior;
    }
}
