#!/usr/bin/env php
<?php
/** Problem 3: Largest prime factor
 * https://projecteuler.net/problem=3
 */

function euler003(int $number): int
{
    $factors = [];
    $candidate = 2;
    while ($candidate ** 2 <= $number) {
        if ($number % $candidate == 0) {
            $factors[] = $candidate;
            $number = $number / $candidate;
        } else {
            $candidate++;
        }
    }
    if ($number != 1) {
        $factors[] = $number;
    }
    return (count($factors) == 0) ? 1 : end($factors);
}

// Main
echo euler003(intval(trim(file_get_contents('php://STDIN')))) . PHP_EOL;
