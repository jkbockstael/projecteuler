#!/usr/bin/env python3

# Problem 3: Largest prime factor
# https://projecteuler.net/problem=3

import math
import sys

def divisor(number):
    return lambda x: number % x == 0

def factors(number):
    return list(filter(divisor(number), ([2] + list(range(3, int(math.ceil(math.sqrt(number))), 2)))))

def prime(number):
    return len(factors(number)) == 0

def largestFactor(factors, number):
    return max(factors) if len(factors) > 0 else number

def euler003(number):
    return largestFactor(list(filter(prime, factors(number))), number)

def parse_input(lines):
    return int(lines[0].strip())

if __name__ == "__main__":
    print(euler003(parse_input(sys.stdin.readlines())))
