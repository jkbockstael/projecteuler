#!/usr/bin/env python3

# Problem 1: Multiples of 3 and 5
# https://projecteuler.net/problem=1

import sys

def parse_input(lines):
    return int(lines[0].strip())

def euler001(bound):
    sum = 0
    for i in range(0, bound):
        if i % 3 == 0 or i % 5 == 0:
            sum += i
    return sum

if __name__ == "__main__":
    print(euler001(parse_input(sys.stdin.readlines())))
