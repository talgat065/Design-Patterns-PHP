<?php

namespace Patterns\Strategy;

/**
 * Class Squeak
 * @package Patterns\Strategy
 */
class Squeak implements QuackBehavior
{
    public function quack(): void
    {
        echo "Squeak";
    }
}