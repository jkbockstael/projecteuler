#!/usr/bin/env php
<?php
/** Problem 4: Largest palindrome product
 * https://projecteuler.net/problem=4
 */

function euler004(int $digits): int
{
    $largest = 0;
    for ($a = 10 ** ($digits - 1); $a < 10 ** $digits; $a++) {
        for ($b = 10 ** ($digits - 1); $b < 10 ** $digits; $b++) {
            $product = $a * $b;
            if (strval($product) == strrev(strval($product))
                && $product > $largest) {
                $largest = $product;
            }
        }
    }
    return $largest;
}

// Main
if ($argc != 2) {
    echo "Usage: ${argv[0]} digits" . PHP_EOL;
    echo "Example: ${argv[0]} 2" . PHP_EOL;
} else {
    echo euler004(intval($argv[1])) . PHP_EOL;
}
