<?php

declare(strict_types=1);

use Vrkansagara\Matrix\Matrix;

define('START_TIME', microtime(true));

require __DIR__ . '/../vendor/autoload.php';

new Matrix();

echo PHP_EOL . sprintf(
    "Script execution complete in %2.3f milliseconds",
    floor((microtime(true) - START_TIME) * 1000)
);
