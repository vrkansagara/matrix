<?php

declare(strict_types=1);

namespace Vrkansagara\Matrix\Commands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Helper\Table;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class DefaultCommand extends Command
{
    protected static $defaultName = 'default';
    protected static $defaultDescription = 'This is default command';

    protected function configure(): void
    {
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $output->writeln('List of commands');

        $table = new Table($output);
        $table
            ->setHeaders(['console command', 'description'])
            ->setRows([
                ['99921-58-10-7', 'Divine Comedy'],
                ['9971-5-0210-0', 'A Tale of Two Cities'],
                ['960-425-059-0', 'The Lord of the Rings'],
                ['80-902734-1-6', 'And Then There Were None'],
            ]);
        $table->render();

        return Command::SUCCESS;
    }
}
