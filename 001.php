#!/usr/bin/env php
<?php
/** Problem 1: Multiples of 3 and 5
 * https://projecteuler.net/problem=1
 *
 * This problem is very straightforward, let's spiff it up by writing a solution
 * in a functional style, despite using PHP.
 */

function multiple(int $n): callable
{
    return function (int $x) use ($n): bool
    {
        return ($x % $n == 0);
    };
}

function sum(array $xs): int
{
    return array_reduce($xs, function ($acc, $x) {
            return $acc + $x;
        }, 0);
}

function either(callable $fn1, callable $fn2): callable
{
    return function ($x) use ($fn1, $fn2): bool
    {
        return ($fn1($x) || $fn2($x));
    };
}

function filter(callable $fn): callable
{
    return function (array $xs) use ($fn): array
    {
        return array_filter($xs, $fn);
    };
}

function euler001(int $bound): int
{
    return sum(filter(either(multiple(3), multiple(5)))(range(0, $bound - 1)));
}

// Main
if ($argc != 2) {
    echo "Usage: ${argv[0]} bound" . PHP_EOL;
    echo "Example: ${argv[0]} 10" . PHP_EOL;
} else {
    echo euler001(intval($argv[1])) . PHP_EOL;
}
