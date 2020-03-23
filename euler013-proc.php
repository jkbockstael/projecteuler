#!/usr/bin/env php
<?php
/** Problem 13: Large sum
 * https://projecteuler.net/problem=13
 */

function parse(string $input): array
{
    return explode("\n", $input);
}

function euler013(array $numbers): string
{
    $count = count($numbers);
    $width = strlen($numbers[0]);
    $carry = 0;
    $total = '';
    for ($i = 1; $i <= $width; $i++) {
        $column = $width - $i;
        $sum = $carry;
        for ($line = 0; $line < $count; $line++) {
            $sum += intval($numbers[$line][$column]);
        }
        $total = strval($sum % 10) . $total;
        $carry = ($sum - ($sum % 10)) / 10;
    }
    $total = strval($carry) . $total;
    return substr($total, 0, 10);
}

// Main
echo euler013(parse(trim(file_get_contents('php://STDIN')))) . PHP_EOL;
