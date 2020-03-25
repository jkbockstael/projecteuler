#!/usr/bin/env php
<?php
/** Problem 17: Number letter counts
 * https://projecteuler.net/problem=17
 */

define('LENGTHS', [
    0 => 0,
    1 => 3,
    2 => 3,
    3 => 5,
    4 => 4,
    5 => 4,
    6 => 3,
    7 => 5,
    8 => 5,
    9 => 4,
    10 => 3,
    11 => 6,
    12 => 6,
    13 => 8,
    14 => 8,
    15 => 7,
    16 => 7,
    17 => 9,
    18 => 8,
    19 => 8,
    20 => 6,
    30 => 6,
    40 => 5,
    50 => 5,
    60 => 5,
    70 => 7,
    80 => 6,
    90 => 6,
    100 => 7,
    1000 => 8,
    'and' => 3
]);

function length(int $number): int
{
    // The first naturals are all named
    if ($number <= 20) {
        return LENGTHS[$number];
    }
    // Tens + units
    if ($number < 100) {
        $units = $number % 10;
        return LENGTHS[$number - $units] + LENGTHS[$units];
    }
    // Hundreds, or hundreds and something
    if ($number < 1000) {
        if ($number % 100 == 0) {
            return LENGTHS[intdiv($number, 100)] + LENGTHS[100];
        } else {
            $tensAndUnits = $number % 100;
            return length($number - $tensAndUnits) + LENGTHS['and']
                + length($tensAndUnits);
        }
    }
    // One thousand
    if ($number == 1000) {
        return LENGTHS[1] + LENGTHS[1000];
    }
}

function euler017(int $bound): int
{
    $lettersCount = 0;
    for ($number = 1; $number <= $bound; $number++) {
        $lettersCount += length($number);
    }
    return $lettersCount;
}

// Main
echo euler017(intval(trim(file_get_contents('php://STDIN')))) . PHP_EOL;
