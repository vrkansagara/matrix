<?php

declare(strict_types=1);

namespace Vrkansagara\Matrix\Commands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class PrintCommand extends Command
{
    protected static $defaultName = 'print';
    protected static $defaultDescription = 'This is print command';

    protected function configure(): void
    {
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $output->writeln('Default command executed successfully !!!');
        return Command::SUCCESS;
    }
}
