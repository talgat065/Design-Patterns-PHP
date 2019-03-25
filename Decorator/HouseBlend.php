<?php

namespace Patterns\Decorator;

/**
 * Class HouseBlend
 * @package Patterns\Decorator
 */
class HouseBlend extends Beverage
{
    /**
     * HouseBlend constructor.
     */
    public function __construct()
    {
        $this->description = 'House Blend Coffee';
    }

    /**
     * @return float
     */
    public function getCost(): float
    {
        return 0.89;
    }
}