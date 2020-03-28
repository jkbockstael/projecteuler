#!/usr/bin/env python3

# Problem 3: Largest prime factor
# https://projecteuler.net/problem=3

import sys

def euler003(number):
    factors = []
    candidate = 2
    while candidate ** 2 < number:
        if number % candidate == 0:
            factors.append(candidate)
            number = number / candidate
        else:
            candidate += 1
    if number != 1:
        factors.append(number)
    return number if len(factors) == 0 else int(factors[-1])

def parse_input(lines):
    return int(lines[0].strip())

if __name__ == "__main__":
    print(euler003(parse_input(sys.stdin.readlines())))
