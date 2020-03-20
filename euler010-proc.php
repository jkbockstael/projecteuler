#!/usr/bin/env php
<?php
/** Problem 10: Summation of primes
 * https://projecteuler.net/problem=10
 */

function euler010(int $bound): int
{
    $primes = [2];
    for ($candidate = 3; $candidate < $bound; $candidate += 2) {
        foreach($primes as $prime) {
            if ($prime ** 2 > $candidate) {
                break;
            }
            if ($candidate % $prime == 0) {
                continue 2;
            }
        }
        $primes[] = $candidate;
    }
    return array_sum($primes);
}

// Main
echo euler010(intval(trim(file_get_contents('php://STDIN')))) . PHP_EOL;
