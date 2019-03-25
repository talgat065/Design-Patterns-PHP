<?php
namespace Patterns\Commands;

use Symfony\Component\Console\Command\Command;

/**
 * Class Base
 * @package Patterns\Commands
 */
class Base extends Command
{
    protected function eol()
    {
        echo PHP_EOL;
    }
}