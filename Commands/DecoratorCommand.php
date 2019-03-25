<?php

namespace Patterns\Commands;

use Patterns\Decorator\Beverage;
use Patterns\Decorator\Espresso;
use Patterns\Decorator\HouseBlend;
use Patterns\Decorator\Mocha;
use Patterns\Decorator\Soy;
use Patterns\Decorator\Whip;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Class DecoratorCommand
 * @package Patterns\Commands
 */
class DecoratorCommand extends Base
{
    public function configure()
    {
        $this->setName('Decorator')
            ->setDescription('Decorator Design Pattern.');
    }

    /**
     * @param \Symfony\Component\Console\Input\InputInterface $input
     * @param \Symfony\Component\Console\Output\OutputInterface $output
     *
     * @return int|null|void
     */
    public function execute(InputInterface $input, OutputInterface $output)
    {
        $beverage = new Espresso();
        $this->displayBevarage($beverage);

        $anotherBeverage = new HouseBlend();
        $anotherBeverage = new Mocha($anotherBeverage);
        $anotherBeverage = new Mocha($anotherBeverage);
        $anotherBeverage = new Soy($anotherBeverage);
        $anotherBeverage = new Whip($anotherBeverage);
        $this->displayBevarage($anotherBeverage);
    }

    /**
     * @param \Patterns\Decorator\Beverage $beverage
     */
    private function displayBevarage(Beverage $beverage): void
    {
        echo "{$beverage->getDescription()} = \${$beverage->getCost()}";
        $this->eol();
    }
}