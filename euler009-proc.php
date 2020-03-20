#!/usr/bin/env php
<?php
/** Problem 9: Special Pythagorean triplet
 * https://projecteuler.net/problem=9
 */

function euler009(int $sum): int
{
    for ($a = 1; $a <= $sum - (2 * $a + 3); $a++) {
        for ($b = $a + 1; $b <= $sum - ($b + 1); $b++) {
            $c = $sum - ($a + $b);
            if ($a ** 2 + $b ** 2 == $c ** 2) {
                // The problem statement guarantees that this will be reached
                return $a * $b * $c;
            }
        }
    }
}

// Main
echo euler009(intval(trim(file_get_contents('php://STDIN')))) . PHP_EOL;
