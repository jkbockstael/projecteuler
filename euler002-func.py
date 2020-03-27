#!/usr/bin/env python3

# Problem 2: Even Fibonacci numbers
# https://projecteuler.net/problem=2

import sys
from itertools import takewhile

def fibonacci():
    a, b = 0, 1
    while True:
        yield a
        a, b = b, a + b

def euler002(bound):
    return sum(x for x in takewhile(lambda x: x < bound, fibonacci()) if x % 2 == 0)

def parse_input(lines):
    return int(lines[0].strip())

if __name__ == "__main__":
    print(euler002(parse_input(sys.stdin.readlines())))
