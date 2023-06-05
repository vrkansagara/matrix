#!/usr/bin/env php
<?php

declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

use Symfony\Component\Console\Application;
use Symfony\Component\Console\CommandLoader\FactoryCommandLoader;
use Vrkansagara\Matrix\Commands\DefaultCommand;
use Vrkansagara\Matrix\Commands\PrintCommand;
use Vrkansagara\Matrix\Matrix;

$application = new Application(Matrix::class, Matrix::$version);

$commandLoader = new FactoryCommandLoader([
    'default' => function () {
        return new DefaultCommand();
    },
    'print' => function () {
        return new PrintCommand();
    },
]);

$application->setCommandLoader($commandLoader);
$application->run();
