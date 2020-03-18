#!/usr/bin/env php
<?php
/** Problem 6: Sum square difference
 * https://projecteuler.net/problem=6
 */

function euler006(int $bound): int
{
    $sum = 0;
    $squaresSum = 0;
    for ($n = 1; $n <= $bound; $n++) {
        $sum += $n;
        $squaresSum += $n ** 2;
    }
    return $sum ** 2 - $squaresSum;
}

// Main
if ($argc != 2) {
    echo "Usage: ${argv[0]} bound" . PHP_EOL;
    echo "Example: ${argv[0]} 10" . PHP_EOL;
} else {
    echo euler006(intval($argv[1])) . PHP_EOL;
}
