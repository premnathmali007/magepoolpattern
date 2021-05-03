<?php
/**
 *
 * @module Codilar_PoolPattern
 * @description Demonstration of Pool Pattern
 * @author    <premnath.m@codilar.com>
 * @link     https://www.codilar.com
 * @copyright Copyright © 2020 NexPWA Pvt. Ltd.. All rights reserved
 *
 * Pool Pattern Example
 */

namespace Codilar\PoolPattern\Console;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputOption;

class DataImport extends Command
{
    protected function configure()
    {
        $this->setName('codilar:data-import');
        $this->setDescription('Codilar Data Import');
        parent::configure();
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln("\nImport Successfully Done.\n");
    }
}
