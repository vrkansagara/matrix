<?php

declare(strict_types=1);

use Vrkansagara\Matrix\Matrix;
use Vrkansagara\Matrix\MatrixRules;

define('START_TIME', microtime(true));

require __DIR__ . '/../vendor/autoload.php';


$demo = [
    [0, 0, 1],
    [0, 1, 1],
    [1, 1, 1],
];
$matrix = new Matrix(3, 3, new MatrixRules());
$matrix->print($demo);

usage();
