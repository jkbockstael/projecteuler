#!/usr/bin/env php
<?php
/** Problem 5: Smallest multiple
 * https://projecteuler.net/problem=5
 */

function euler005(int $bound): int
{
    $number = $bound;
    while (true) {
        for ($divisor = 1; $divisor <= $bound; $divisor++) {
            if ($number % $divisor != 0) {
                $number++;
                continue 2;
            }
        }
        return $number;
    }
}

// Main
if ($argc != 2) {
    echo "Usage: ${argv[0]} bound" . PHP_EOL;
    echo "Example: ${argv[0]} 10" . PHP_EOL;
} else {
    echo euler005(intval($argv[1])) . PHP_EOL;
}
