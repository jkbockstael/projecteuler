#!/usr/bin/env php
<?php
/** Problem 17: Number letter counts
 * https://projecteuler.net/problem=17
 */

define('NUMBERS', [
    0 => '',
    1 => 'one',
    2 => 'two',
    3 => 'three',
    4 => 'four',
    5 => 'five',
    6 => 'six',
    7 => 'seven',
    8 => 'eight',
    9 => 'nine',
    10 => 'ten',
    11 => 'eleven',
    12 => 'twelve',
    13 => 'thirteen',
    14 => 'fourteen',
    15 => 'fifteen',
    16 => 'sixteen',
    17 => 'seventeen',
    18 => 'eighteen',
    19 => 'nineteen',
    20 => 'twenty',
    30 => 'thirty',
    40 => 'forty',
    50 => 'fifty',
    60 => 'sixty',
    70 => 'seventy',
    80 => 'eighty',
    90 => 'ninety',
    100 => 'hundred',
    1000 => 'thousand'
]);

function spell(int $number): string
{
    // The first naturals are all named
    if ($number <= 20) {
        return NUMBERS[$number];
    }
    // Tens + units
    if ($number < 100) {
        $units = $number % 10;
        return NUMBERS[$number - $units] . NUMBERS[$units];
    }
    // Hundreds, or hundreds and something
    if ($number < 1000) {
        if ($number % 100 == 0) {
            return NUMBERS[intdiv($number, 100)] . NUMBERS[100];
        } else {
            $tensAndUnits = $number % 100;
            return spell($number - $tensAndUnits) . 'and' . spell($tensAndUnits);
        }
    }
    // One thousand
    if ($number == 1000) {
        return NUMBERS[1] . NUMBERS[1000];
    }
}

function euler017(int $bound): int
{
    $lettersCount = 0;
    for ($number = 1; $number <= $bound; $number++) {
        $lettersCount += strlen(spell($number));
    }
    return $lettersCount;
}

// Main
echo euler017(intval(trim(file_get_contents('php://STDIN')))) . PHP_EOL;
