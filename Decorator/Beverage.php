<?php

namespace Patterns\Decorator;

/**
 * Class Beverage
 * @package Patterns\Decorator
 */
abstract class Beverage
{
    /**
     * @var string
     */
    protected $description = 'Unknown description';

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @return float
     */
    public abstract function getCost(): float;
}