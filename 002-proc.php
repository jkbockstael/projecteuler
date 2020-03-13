#!/usr/bin/env php
<?php
/** Problem 2: Even Fibonacci numbers
 * https://projecteuler.net/problem=2
 */

function euler002(int $bound): int
{
    $previous = 0;
    $current = 1;
    $sum = 0;
    while ($current <= $bound) {
        if ($current % 2 == 0) {
            $sum += $current;
        }
        $tmp = $previous + $current;
        $previous = $current;
        $current = $tmp;
    }
    return $sum;
}

// Main
if ($argc != 2) {
    echo "Usage: ${argv[0]} bound" . PHP_EOL;
    echo "Example: ${argv[0]} 100" . PHP_EOL;
} else {
    echo euler002(intval($argv[1])) . PHP_EOL;
}
