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
echo euler006(intval(trim(file_get_contents('php://STDIN')))) . PHP_EOL;
