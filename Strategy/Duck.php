<?php
namespace Patterns\Strategy;

/**
 * Базовый класс уток.
 *
 * Class Duck
 * @package Patterns\Strategy
 */
abstract class Duck
{
    /**
     * @var \Patterns\Strategy\FlyBehavior
     */
    public $flyBehavior;

    /**
     * @var \Patterns\Strategy\QuackBehavior
     */
    public $quackBeahavior;

    public abstract function display(): void;

    /**
     * Делегирование операции классам поведения
     */
    public function performFly(): void
    {
        $this->flyBehavior->fly();
    }

    /**
     * Делегирование операции классам поведения
     */
    public function performQuack(): void
    {
        $this->quackBeahavior->quack();
    }

    /**
     * Все утки умеют плавать.
     */
    public function swim(): void
    {
        echo "All ducks float, even decoys!";
    }

    /**
     * Динамическое изменения поведения $flyBehavior
     * 
     * @param \Patterns\Strategy\FlyBehavior $behavior
     */
    public function setFlyBehavior(FlyBehavior $behavior)
    {
        $this->flyBehavior = $behavior;
    }

    /**
     * Динамическое изменения поведения $quackBehavior
     * 
     * @param \Patterns\Strategy\QuackBehavior $behavior
     */
    public function setQuackBehavior(QuackBehavior $behavior)
    {
        $this->quackBeahavior = $behavior;
    }
}