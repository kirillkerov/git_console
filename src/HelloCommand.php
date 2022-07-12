<?php

namespace App;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class HelloCommand extends Command
{
    protected function configure()
    {
        parent::configure(); // TODO: Change the autogenerated stub

        $this
            ->setName('Hello')
            ->addArgument('name', InputArgument::REQUIRED, 'Your name')
        ;

    }

    public function execute(InputInterface $input, OutputInterface $output): int
    {
        // retrieve the argument value using getArgument()
        $output->writeln('Привет, '.$input->getArgument('name'));

        return Command::SUCCESS;
    }
}
