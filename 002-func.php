#!/usr/bin/env php
<?php
/** Problem 2: Even Fibonacci numbers
 * https://projecteuler.net/problem=2
 *
 * Let's play with generators and iterate over infinite sequences.
 * Yes it's totally overkill to have generators all the way down, but why not.
 */

// The Fibonacci sequence as an infinite generator
function fibonacci(): Generator
{
    yield 0;
    yield 1;
    $previous = 0;
    $current = 1;
    while (true) {
        $tmp = $previous + $current;
        $previous = $current;
        $current = $tmp;
        yield $current;
    }
}

// Create a generator from another generator as long as a condition is met
function genTakeWhile($condition): callable
{
    return function (Generator $generator) use ($condition): Generator
    {
        while ($condition($generator->current())) {
            yield $generator->current();
            $generator->next();
        }
    };
}

// Create a generator by filtering another generator
function genFilter($condition): callable
{
    return function (Generator $generator) use ($condition): Generator
    {
        foreach ($generator as $value) {
            if ($condition($value)) {
                yield $value;
            }
        }
    };
}

// Get the sum of a generator's values
function genSum(Generator $generator): int
{
    $sum = 0;
    foreach ($generator as $value) {
        $sum += $value;
    }
    return $sum;
}

function multiple(int $n): callable
{
    return function (int $x) use ($n): bool
    {
        return $x % $n == 0;
    };
}

function lessOrEqual(int $bound): callable
{
    return function(int $x) use ($bound): bool
    {
        return $x <= $bound;
    };
}

function euler002(int $bound): int
{
    return genSum(
        genFilter(multiple(2))(
            genTakeWhile(lessOrEqual($bound))(
                fibonacci()
            )
        )
    );
}

// Main
if ($argc != 2) {
    echo "Usage: ${argv[0]} bound" . PHP_EOL;
    echo "Example: ${argv[0]} 100" . PHP_EOL;
} else {
    echo euler002(intval($argv[1])) . PHP_EOL;
}
