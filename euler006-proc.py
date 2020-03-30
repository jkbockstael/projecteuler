#!/usr/bin/env python3

# Problem 6: Sum square difference
# https://projecteuler.net/problem=6

import sys

def euler006(bound):
    numbers_sum = 0
    squares_sum = 0
    for number in range(1, bound + 1):
        numbers_sum += number
        squares_sum += number ** 2
    return numbers_sum ** 2 - squares_sum

def parse_input(lines):
    return int(lines[0].strip())

if __name__ == "__main__":
    print(euler006(parse_input(sys.stdin.readlines())))
