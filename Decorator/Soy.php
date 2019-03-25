<?php

namespace Patterns\Decorator;

/**
 * Class Soy
 * @package Patterns\Decorator
 */
class Soy extends CondimentDecorator
{
    /**
     * @var \Patterns\Decorator\Beverage
     */
    private $bevarage;

    /**
     * Soy constructor.
     *
     * @param \Patterns\Decorator\Beverage $beverage
     */
    public function __construct(Beverage $beverage)
    {
        $this->bevarage = $beverage;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->bevarage->getDescription() . ', Soy';
    }

    /**
     * @return float
     */
    public function getCost(): float
    {
        return 0.50 + $this->bevarage->getCost();
    }
}