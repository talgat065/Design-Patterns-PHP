<?php

namespace Patterns\Decorator;

/**
 * Class Mocha
 * @package Patterns\Decorator
 */
class Mocha extends CondimentDecorator
{
    /**
     * @var \Patterns\Decorator\Beverage
     */
    private $beverage;

    /**
     * Mocha constructor.
     *
     * @param \Patterns\Decorator\Beverage $beverage
     */
    public function __construct(Beverage $beverage)
    {
        $this->beverage = $beverage;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->beverage->getDescription() . ', Mocha';
    }

    /**
     * @return float
     */
    public function getCost(): float
    {
        return 0.20 + $this->beverage->getCost();
    }
}