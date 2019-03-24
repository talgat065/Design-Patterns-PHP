<?php

namespace Patterns\Strategy;

/**
 * Class MuteQuack
 * @package Patterns\Strategy
 */
class MuteQuack implements QuackBehavior
{
    public function quack(): void
    {
        echo "<< Silence >>";
    }
}