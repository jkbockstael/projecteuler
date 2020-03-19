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
echo euler001(intval(trim(file_get_contents('php://STDIN')))) . PHP_EOL;
