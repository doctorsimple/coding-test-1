<?php
/**
 * Created by PhpStorm.
 * User: grey
 * Date: 10/11/2018
 * Time: 2:10 PM
 */

namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class ReadFile extends Command
{
    protected function configure() {
        $this->setName('app:read-file')
            ->setDescription('Read that file!')
            ->setHelp('reading is fundamental');
    }

    protected function execute(InputInterface $input, OutputInterface $output) {


        $output->writeln(' DONE.');

    }

}
