#!/usr/bin/env python3

# Problem 11: Largest product in a grid
# https://projecteuler.net/problem=11

import sys

def largest_product(count, grid):
    size = len(grid)
    largest_product = 0
    # Lines
    for line in range(0, size):
        for column in range(0, size - count + 1):
            product = 1
            for offset in range(0, count):
                product *= grid[line][column + offset]
            if product > largest_product:
                largest_product = product
    # Columns
    for line in range(0, size - count + 1):
        for column in range(0, size):
            product = 1
            for offset in range(0, count):
                product *= grid[line + offset][column]
            if product > largest_product:
                largest_product = product
    # Diagonals
    for line in range(0, size - count + 1):
        for column in range(0, size - count + 1):
            product = 1
            for offset in range(0, count):
                product *= grid[line + offset][column + offset]
            if product > largest_product:
                largest_product = product
    # The other diagonals
    for line in range(count - 1, size):
        for column in range(0, size - count + 1):
            product = 1
            for offset in range(0, count):
                product *= grid[line - offset][column + offset]
            if product > largest_product:
                largest_product = product
    return largest_product

def euler011(grid):
    return largest_product(4, grid)

def parse_input(lines):
    output = []
    for line in lines:
        parsed_line = []
        numbers = line.split(" ")
        for number in numbers:
            parsed_line.append(int(number))
        output.append(parsed_line)
    return output

if __name__ == "__main__":
    print(euler011(parse_input(sys.stdin.readlines())))
