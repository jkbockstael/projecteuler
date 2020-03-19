#!/usr/bin/env php
<?php
/** Problem 7: 10001st prime
 * https://projecteuler.net/problem=7
 */

function euler007(int $count): int
{
    $primes = [2];
    $candidate = 1;
    while (count($primes) < $count) {
        $candidate += 2; // There's no point in testing even numbers
        foreach($primes as $prime) {
            if ($candidate % $prime == 0) {
                continue 2;
            }
        }
        $primes[] = $candidate;
    }
    return end($primes);
}

// Main
echo euler007(intval(trim(file_get_contents('php://STDIN')))) . PHP_EOL;
