#!/usr/bin/env php
<?php
/** Problem 16: Power digit sum
 * https://projecteuler.net/problem=16
 *
 * In a typical Project Euler fashion, this is a problem that sound simple
 * but the size of the input makes it impractical to bruteforce. PHP isn't
 * up to the task when it comes to computing 2^1000 directly, so this one
 * has to be approached as if done by hand on paper.
 */


// To make things readable, numbers have the least significant digit first
function doubleNumber(array $number): array
{
    $carry = 0;
    $result = [];
    for ($i = 0; $i < count($number); $i++) {
        $sum = $number[$i] * 2 + $carry;
        $digit = $sum % 10;
        $carry = ($sum - $digit) / 10;
        $result[] = $digit;
    }
    if ($carry > 0) {
        $result[] = $carry;
    }
    return $result;
}

function euler016(int $power): int
{
    $number = [2];
    for ($i = 1; $i < $power; $i++) {
        $number = doubleNumber($number);
    }
    return array_sum($number);
}

// Main
echo euler016(intval(trim(file_get_contents('php://STDIN')))) . PHP_EOL;
