<?php

namespace Patterns\Commands;

use Patterns\Strategy\FlyRocketPowered;
use Patterns\Strategy\ModelDuck;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Patterns\Strategy\MallardDuck;

/**
 * Class StrategyCommand
 * @package Patterns\Commands
 */
class StrategyCommand extends Base
{

    public function configure()
    {
        $this->setName('Strategy')
            ->setDescription('Strategy Design Pattern.');
    }

    /**
     * @param \Symfony\Component\Console\Input\InputInterface $input
     * @param \Symfony\Component\Console\Output\OutputInterface $output
     *
     * @return int|null|void
     */
    public function execute(InputInterface $input, OutputInterface $output)
    {
        $duck = new MallardDuck();
        $duck->performFly();
        $this->eol();
        $duck->performQuack();
        $this->eol();

        $model = new ModelDuck();
        $model->performFly();
        $this->eol();
        $model->setFlyBehavior(new FlyRocketPowered());
        $model->performFly();
        $this->eol();
    }
}