<?php

/**
 * Helper file
 *
 * @author Vallabhdas Kansagara <vrkansagara@gmail.com>
 */

declare(strict_types=1);

if (! function_exists('usage')) {
    function usage()
    {
        echo PHP_EOL . sprintf(
            "Script execution complete in %2.3f milliseconds",
            floor((microtime(true) - START_TIME) * 1000)
        );


        echo PHP_EOL . sprintf(
            "Current memeory usage %s",
            getCurrentMemoryUsage(memory_get_usage(true))
        ) . PHP_EOL;
    }
}
if (! function_exists('getCurrentMemoryUsage')) {
    /**
     * @usage echo getCurrentMemoryUsage(memory_get_usage(true)); // 123 kb
     * @param $size
     * @return string
     */
    function getCurrentMemoryUsage($size): string
    {
        $unit = ['b', 'kb', 'mb', 'gb', 'tb', 'pb'];
        return @round($size / pow(1024, ($i = floor(log($size, 1024)))), 2) . ' ' . $unit[$i];
    }
}
