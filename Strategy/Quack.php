<?php

namespace Patterns\Strategy;

/**
 * Class Quack
 * @package Patterns\Strategy
 */
class Quack implements QuackBehavior
{
    public function quack(): void
    {
        echo "Quack!";
    }
}