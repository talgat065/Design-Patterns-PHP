<?php
namespace Patterns\Strategy;

/**
 * Interface QuackBehavior
 * @package Patterns\Strategy
 */
interface QuackBehavior
{
    public function quack(): void;
}