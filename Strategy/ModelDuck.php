<?php

namespace Patterns\Strategy;

/**
 * Class ModelDuck
 * @package Patterns\Strategy
 */
class ModelDuck extends Duck
{
    public function __construct()
    {
        $this->flyBehavior = new FlyNoWay();
        $this->quackBeahavior = new Squeak();
    }

    public function display(): void
    {
        echo "I am a model duck.";
    }
}