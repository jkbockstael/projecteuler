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
echo euler005(intval(trim(file_get_contents('php://STDIN')))) . PHP_EOL;
