<?php
namespace Patterns\Commands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class Base extends Command
{
    public function __construct($name = null)
    {
        echo "====**** Design Patterns ****====\n===================================\n\n";
        parent::__construct($name);
    }

    protected function eol()
    {
        echo PHP_EOL;
    }
}