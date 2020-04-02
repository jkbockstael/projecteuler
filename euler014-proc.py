#!/usr/bin/env python3

# Problem 14: Longest Collatz sequence
# https://projecteuler.net/problem=14

import sys

def euler014(bound):
    best_start = 0
    best_length = 0
    for start in range(1, bound):
        number = start
        length = 0
        while number != 1:
            number = number // 2 if number % 2 == 0 else 3 * number + 1
            length += 1
        if length > best_length:
            best_length = length
            best_start = start
    return best_start

def parse_input(lines):
    return int(lines[0].strip())

if __name__ == "__main__":
    print(euler014(parse_input(sys.stdin.readlines())))
