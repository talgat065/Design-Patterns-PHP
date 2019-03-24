<?php
namespace Patterns\Strategy;

/**
 * Class MallardDuck
 * @package Patterns\Strategy
 */
class MallardDuck extends Duck
{
    public function __construct()
    {
        $this->flyBehavior = new FlyWithWings();
        $this->quackBeahavior = new Quack();
    }

    public function display(): void
    {
        echo "I am a fucking Mallard Duck!";
    }
}