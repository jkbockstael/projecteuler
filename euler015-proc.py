#!/usr/bin/env python3

# Problem 15: Lattice paths
# https://projecteuler.net/problem=15

import sys

def euler015(size):
    row = 2 * size
    column = size
    cell = 1
    for i in range(1, column + 1):
        cell = cell * ((row + 1 - i) / i)
    return int(cell)

def parse_input(lines):
    return int(lines[0].strip())

if __name__ == "__main__":
    print(euler015(parse_input(sys.stdin.readlines())))
