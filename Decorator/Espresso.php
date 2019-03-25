<?php

namespace Patterns\Decorator;

/**
 * Class Espresso
 * @package Patterns\Decorator
 */
class Espresso extends Beverage
{
    /**
     * Espresso constructor.
     */
    public function __construct()
    {
        $this->description = 'Espresso';
    }

    /**
     * @return float
     */
    public function getCost(): float
    {
        return 1.99;
    }

}