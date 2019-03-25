<?php

namespace Patterns\Observer;

/**
 * Interface Observer
 * @package Patterns\Observer
 */
interface Observer
{
    /**
     * @param float $temp
     * @param float $humidity
     * @param float $pressure
     */
    public function update(float $temp, float $humidity, float $pressure): void;
}