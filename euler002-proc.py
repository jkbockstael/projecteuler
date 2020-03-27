#!/usr/bin/env python3

# Problem 2: Even Fibonacci numbers
# https://projecteuler.net/problem=2

import sys

def euler002(bound):
    sum = 0
    a, b = 1, 1
    while b < bound:
        if b % 2 == 0:
            sum += b
        a, b = b, a + b
    return sum

def parse_input(lines):
    return int(lines[0].strip())

if __name__ == "__main__":
    print(euler002(parse_input(sys.stdin.readlines())))
