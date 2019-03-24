<?php

namespace Patterns\Strategy;

/**
 * Class FlyRocketPowered
 * @package Patterns\Strategy
 */
class FlyRocketPowered implements FlyBehavior
{
    public function fly(): void
    {
        echo "I am flying with a ROCKET!";
    }
}