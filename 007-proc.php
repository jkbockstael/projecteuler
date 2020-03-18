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
if ($argc != 2) {
    echo "Usage: ${argv[0]} nth" . PHP_EOL;
    echo "Example: ${argv[0]} 6" . PHP_EOL;
} else {
    echo euler007(intval($argv[1])) . PHP_EOL;
}
