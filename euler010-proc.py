#!/usr/bin/env python3

# Problem 10: Summation of primes
# https://projecteuler.net/problem=10

import sys

def is_prime(primes, number):
    for prime in primes:
        if number % prime == 0:
            return False
        if prime ** 2 > number:
            break
    return True

def euler010(bound):
    primes = [2]
    for candidate in range(3, bound, 2):
        if is_prime(primes, candidate):
            primes.append(candidate)
    return sum(primes)

def parse_input(lines):
    return int(lines[0].strip())

if __name__ == "__main__":
    print(euler010(parse_input(sys.stdin.readlines())))
