#!/usr/bin/env php
<?php
/** Problem 12: Highly divisible triangular number
 * https://projecteuler.net/problem=12
 */

function primes(int $count): array
{
    $primes = [2];
    $candidate = 1;
    while (count($primes) < $count) {
        $candidate += 2;
        for ($i = 2; $i ** 2 < $candidate; $i++) {
            if ($candidate % $i == 0) {
                continue 2;
            }
        }
        $primes[] = $candidate;
    }
    return $primes;
}

function sigmaZero(array $primes, int $number): int
{
    // Find the primes factors
    $factors = [];
    foreach ($primes as $prime) {
        if ($prime > $number / 2) {
            break;
        }
        if ($number % $prime == 0) {
            $factors[] = $prime;
        }
    }
    // Find the power of each of these factors
    $powers = [];
    foreach ($factors as $factor) {
        $power = 0;
        while ($number % $factor == 0) {
            $power += 1;
            $number /= $factor;
        }
        $powers[] = $power;
    }
    $sigmaZero = 1;
    foreach ($powers as $power) {
        $sigmaZero *= ($power + 1);
    }
    return $sigmaZero;
}

function euler012(int $min): int
{
    $rank = 1;
    $number = 1;
    $primes = primes(1000);
    while (sigmaZero($primes, $number) <= $min) {
        $rank += 1;
        $number = ($rank * ($rank + 1)) / 2;
    }
    return $number;
}

// Main
echo euler012(intval(trim(file_get_contents('php://STDIN')))) . PHP_EOL;
