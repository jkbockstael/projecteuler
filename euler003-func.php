#!/usr/bin/env php
<?php
/** Problem 3: Largest prime factor
 * https://projecteuler.net/problem=3
 *
 * This was pleasant to write, but it's horribly inefficient.
 * Feel free to improve this through memoization or other means.
 */

function head(array $xs): int
{
    return array_values($xs)[0];
}

function tail(array $xs): array
{
    return array_slice($xs, 1);
}

function cons(int $x): callable
{
    return function (array $xs) use ($x): array
    {
        return array_merge([$x], $xs);
    };
}

function maximum(array $xs): int
{
    return (count($xs) == 1)
        ? head($xs)
        : max(head($xs), maximum(tail($xs)));
}

function intrange(int $from, int $to, int $step)
{
    return ($from >= $to)
        ? []
        : cons($from)(intrange($from + $step, $to, $step));
}

function divisor(int $n): callable
{
    return function (int $x) use ($n): bool
    {
        return ($n % $x == 0);
    };
}

function filter(callable $fn): callable
{
    return function (array $xs) use ($fn): array
    {
        return array_filter($xs, $fn);
    };
}

function factors(int $n): array
{
    return filter(divisor($n))(
        cons(2)(intrange(3, ceil(sqrt($n)), 2)));
}

// Wrapper to avoid a PHP warning about undefined constants
function prime(): callable
{
    return function (int $n): bool
    {
        return (count(factors($n)) == 0);
    };
}

function largestFactor(array $factors, int $number): int
{
    return (count($factors) == 0)
        ? $number
        : maximum($factors);
}

function euler003(int $number): int
{
    return largestFactor(filter(prime())(factors($number)), $number);
}

// Main
echo euler003(intval(trim(file_get_contents('php://STDIN')))) . PHP_EOL;
