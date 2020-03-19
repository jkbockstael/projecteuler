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
echo euler004(intval(trim(file_get_contents('php://STDIN')))) . PHP_EOL;
