#!/usr/bin/env python3

# Problem 9: Special Pythagorean triplet
# https://projecteuler.net/problem=9

import sys

def euler009(total):
    a = 1
    while a <= total - (2 * a + 3):
        b = a + 1
        while b <= total - (b + 1):
            c = total - (a + b)
            if a ** 2 + b ** 2 == c ** 2:
                return a * b * c
            b += 1
        a += 1

def parse_input(lines):
    return int(lines[0].strip())

if __name__ == "__main__":
    print(euler009(parse_input(sys.stdin.readlines())))
