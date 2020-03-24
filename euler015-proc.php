#!/usr/bin/env php
<?php
/** Problem 15: Lattice paths
 * https://projecteuler.net/problem=15
 *
 * If we place in each cell of the grid the number of ways to reach it given
 * the problem constraints (can only move right and down), it spells out the
 * Pascal triangle. The number of paths to the opposite corner of a square grid
 * of size n is the central value of the (2n)th row in the Pascal triangle.
 *
 * This problem can then be solved directly.
 */


function euler015(int $size): int
{
    $row = 2 * $size;
    $column = $size; // starting at 0
    $cell = 1; // value of the leftmost cell
    for ($i = 1; $i <= $column; $i++) {
        $cell = $cell * (($row + 1 - $i) / $i);
    }
    return $cell;
}

// Main
echo euler015(intval(trim(file_get_contents('php://STDIN')))) . PHP_EOL;
