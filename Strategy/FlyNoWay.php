<?php
namespace Patterns\Strategy;

/**
 * Class FlyNoWay
 * @package Patterns\Strategy
 */
class FlyNoWay implements FlyBehavior
{
    public function fly(): void
    {
        echo "I can not fly *_* ";
    }
}