#!/usr/bin/env python3

# Problem 4: Largest palindrome product
# https://projecteuler.net/problem=4

import sys

def euler003(digits):
    largest = 0;
    for a in range(10 ** (digits - 1), 10 ** digits):
        for b in range(10 ** (digits - 1), 10 ** digits):
            product = a * b
            if str(product) == str(product)[::-1] and product > largest:
                largest = product
    return largest

def parse_input(lines):
    return int(lines[0].strip())

if __name__ == "__main__":
    print(euler003(parse_input(sys.stdin.readlines())))
