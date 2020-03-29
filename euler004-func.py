#!/usr/bin/env python3

# Problem 4: Largest palindrome product
# https://projecteuler.net/problem=4

import sys

def palindrome(number):
    return str(number) == str(number)[::-1]
    
def euler003(digits):
    return max([a * b
        for a in range(10 ** (digits - 1), 10 ** digits)
        for b in range(10 ** (digits - 1), 10 ** digits)
        if palindrome(a * b)])

def parse_input(lines):
    return int(lines[0].strip())

if __name__ == "__main__":
    print(euler003(parse_input(sys.stdin.readlines())))
