<?php

namespace Patterns\Observer;

/**
 * Class WeatherData
 * @package Patterns\Observer
 */
class WeatherData implements Subject
{
    /**
     * @var \Patterns\Observer\Observer[]
     */
    private $observers;

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

    public function __construct()
    {
        $this->observers = new \SplObjectStorage();
    }

    /**
     * @param \Patterns\Observer\Observer $o
     */
    public function registerObserver(Observer $o): void
    {
        $this->observers->attach($o);
    }

    /**
     * @param \Patterns\Observer\Observer $o
     */
    public function removeObserver(Observer $o): void
    {
        $this->observers->detach($o);
    }

    /**
     * Notify objects
     */
    public function notifyObservers(): void
    {
        foreach ($this->observers as $observer) {
            $observer->update($this->temperature, $this->humidity, $this->pressure);
        }
    }

    /**
     * Изменения в данных
     */
    public function measurementsChanged(): void
    {
        $this->notifyObservers();
    }

    /**
     * @param $temperature
     * @param $humidity
     * @param $pressure
     */
    public function setMeasurements($temperature, $humidity, $pressure)
    {
        $this->temperature = $temperature;
        $this->humidity = $humidity;
        $this->pressure = $pressure;

        $this->measurementsChanged();
    }

}