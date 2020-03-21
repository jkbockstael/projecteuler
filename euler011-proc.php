#!/usr/bin/env php
<?php
/** Problem 11: Largest product in a grid
 * https://projecteuler.net/problem=11
 */

function parseInput(string $input): array
{
    $output = [];
    $lines = explode("\n", $input);
    foreach ($lines as $line) {
        $parsedLine = [];
        $numbers = explode(" ", $line);
        foreach ($numbers as $number) {
            $parsedLine[] = intval($number);
        }
        $output[] = $parsedLine;
    }
    return $output;
}

function largestProduct(int $count, array $grid): int
{
    $size = count($grid);
    $count = 4;
    $largestProduct = 0;
    // Lines
    for ($line = 0; $line < $size; $line++) {
        for ($column = 0; $column <= $size - $count; $column++) {
            $product = 1;
            for ($offset = 0; $offset < $count; $offset++) {
                $product *= $grid[$line][$column + $offset];
            }
            if ($product > $largestProduct) {
                $largestProduct = $product;
            }
        }
    }
    // Columns
    for ($line = 0; $line <= $size - $count; $line++) {
        for ($column = 0; $column < $size; $column++) {
            $product = 1;
            for ($offset = 0; $offset < $count; $offset++) {
                $product *= $grid[$line + $offset][$column];
            }
            if ($product > $largestProduct) {
                $largestProduct = $product;
            }
        }
    }
    // Diagonals
    for ($line = 0; $line <= $size - $count; $line++) {
        for ($column = 0; $column <= $size - $count; $column++) {
            $product = 1;
            for ($offset = 0; $offset < $count; $offset++) {
                $product *= $grid[$line + $offset][$column + $offset];
            }
            if ($product > $largestProduct) {
                $largestProduct = $product;
            }
        }
    }
    // The other diagonals
    for ($line = $count - 1; $line < $size; $line++) {
        for ($column = 0; $column <= $size - $count; $column++) {
            $product = 1;
            for ($offset = 0; $offset < $count; $offset++) {
                $product *= $grid[$line - $offset][$column + $offset];
            }
            if ($product > $largestProduct) {
                $largestProduct = $product;
            }
        }
    }
    return $largestProduct;
}

function euler011(string $input): int
{
    return largestProduct(4, parseInput($input));
}

// Main
echo euler011(trim(file_get_contents('php://STDIN'))) . PHP_EOL;
