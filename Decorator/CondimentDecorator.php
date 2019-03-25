<?php

namespace Patterns\Decorator;

/**
 * Class CondimentDecorator
 * @package Patterns\Decorator
 */
abstract class CondimentDecorator extends Beverage
{
    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
}