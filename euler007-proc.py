#!/usr/bin/env python3

# Problem 7: 10001st prime
# https://projecteuler.net/problem=7

import sys

def is_prime(primes, number):
    for prime in primes:
        if number % prime == 0:
            return False
        if prime ** 2 > number:
            break
    return True

def euler007(count):
    primes = [2]
    candidate = 1
    while len(primes) < count:
        candidate += 2
        if is_prime(primes, candidate):
            primes.append(candidate)
    return primes[-1]

def parse_input(lines):
    return int(lines[0].strip())

if __name__ == "__main__":
    print(euler007(parse_input(sys.stdin.readlines())))
