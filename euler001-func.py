#!/usr/bin/env python3

# Problem 1: Multiples of 3 and 5
# https://projecteuler.net/problem=1

import sys

def euler001(bound):
    return sum(x for x in range(0, bound) if x % 3 == 0 or x % 5 == 0)

def parse_input(lines):
    return int(lines[0].strip())

if __name__ == "__main__":
    print(euler001(parse_input(sys.stdin.readlines())))
