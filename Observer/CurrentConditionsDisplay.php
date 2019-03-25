<?php

namespace Patterns\Observer;

/**
 * Class CurrentConditionsDisplay
 * @package Patterns\Observer
 */
class CurrentConditionsDisplay implements Observer, DisplayElement
{
    /**
     * @var \Patterns\Observer\Subject
     */
    private $subject;

    /**
     * @var float
     */
    private $temperature;

    /**
     * @var float
     */
    private $humidity;

    /**
     * @var float
     */
    private $pressure;

    /**
     * CurrentConditionsDisplay constructor.
     *
     * @param \Patterns\Observer\Subject $subject
     */
    public function __construct(Subject $subject)
    {
        $this->subject = $subject;
        $subject->registerObserver($this);
    }

    /**
     * @param float $temp
     * @param float $humidity
     * @param float $pressure
     */
    public function update(float $temp, float $humidity, float $pressure): void
    {
        $this->temperature = $temp;
        $this->humidity = $humidity;
        $this->pressure = $pressure;

        $this->display();
    }

    /**
     * Display data.
     */
    public function display(): void
    {
        echo "Current conditions: {$this->temperature}F degrees and {$this->humidity}% humidity";
    }
}