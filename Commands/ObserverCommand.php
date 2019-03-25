<?php

namespace Patterns\Commands;

use Patterns\Observer\CurrentConditionsDisplay;
use Patterns\Observer\WeatherData;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Class ObserverCommand
 * @package Patterns\Commands
 */
class ObserverCommand extends Base
{
    public function configure()
    {
        $this->setName('Observer')
            ->setDescription('Observer Design Pattern.');
    }

    /**
     * @param \Symfony\Component\Console\Input\InputInterface $input
     * @param \Symfony\Component\Console\Output\OutputInterface $output
     *
     * @return int|null|void
     */
    public function execute(InputInterface $input, OutputInterface $output)
    {
        $weatherData = new WeatherData();

        $currentConditionDisplay = new CurrentConditionsDisplay($weatherData);

        $weatherData->setMeasurements(18.01, 72.48, 98.0);
        $this->eol();
        $weatherData->setMeasurements(98.00, 17.75, 34.0);
        $this->eol();
        $weatherData->setMeasurements(0.0, 85.11, 48.90);
        $this->eol();
    }
}