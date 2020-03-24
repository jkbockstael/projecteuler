#!/usr/bin/env php
<?php
/** Problem 14: Longest Collatz sequence
 * https://projecteuler.net/problem=14
 */


function euler014(int $bound): int
{
    $bestStart = 0;
    $bestLength = 0;
    for ($start = 1; $start < $bound; $start++) {
        $number = $start;
        $length = 0;
        while ($number !== 1) {
            if ($number % 2 == 0) {
                $number = $number / 2;
            } else {
                $number = 3 * $number + 1;
            }
            $length += 1;
        }
        if ($length > $bestLength) {
            $bestLength = $length;
            $bestStart = $start;
        }
    }
    return $bestStart;
}

// Main
echo euler014(intval(trim(file_get_contents('php://STDIN')))) . PHP_EOL;
