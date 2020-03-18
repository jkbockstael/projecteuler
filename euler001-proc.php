#!/usr/bin/env php
<?php
/** Problem 1: Multiples of 3 and 5
 * https://projecteuler.net/problem=1
 *
 * Functional is cool, procedural is also nice.
 */

function euler001(int $bound): int
{
    $sum = 0;
    for ($i = 0; $i < $bound; $i++) {
        if ($i % 3 == 0 || $i % 5 == 0) {
            $sum += $i;
        }
    }
    return $sum;
}

// Main
if ($argc != 2) {
    echo "Usage: ${argv[0]} bound" . PHP_EOL;
    echo "Example: ${argv[0]} 10" . PHP_EOL;
} else {
    echo euler001(intval($argv[1])) . PHP_EOL;
}
