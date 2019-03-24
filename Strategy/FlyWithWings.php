<?php
namespace Patterns\Strategy;

/**
 * Class FlyWithWings
 * @package Patterns\Strategy
 */
class FlyWithWings implements FlyBehavior
{
    public function fly(): void
    {
        echo "I am flying with Wings!";
    }
}