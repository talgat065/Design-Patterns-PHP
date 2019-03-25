<?php

namespace Patterns\Decorator;

/**
 * Class Whip
 * @package Patterns\Decorator
 */
class Whip extends CondimentDecorator
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
        return $this->bevarage->getDescription() . ', Whip';
    }

    /**
     * @return float
     */
    public function getCost(): float
    {
        return 0.10 + $this->bevarage->getCost();
    }
}