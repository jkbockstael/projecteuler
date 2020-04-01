#!/usr/bin/env python3

# Problem 12: Highly divisible triangular number
# https://projecteuler.net/problem=12

import sys

def is_prime(primes, number):
    for prime in primes:
        if number % prime == 0:
            return False
        if prime ** 2 > number:
            break
    return True

def primes(count):
    primes = [2]
    candidate = 3
    while len(primes) < count:
        if is_prime(primes, candidate):
            primes.append(candidate)
        candidate += 2
    return primes

def sigma_zero(primes, number):
    factors = [prime
        for prime in primes
        if prime <= number / 2
        and number % prime == 0]
    powers = []
    for factor in factors:
        power = 0
        while number % factor == 0:
            power += 1
            number /= factor
        powers.append(power)
    product = 1
    for power in powers:
        product *= (power +1)
    return product

def euler012(minimum):
    rank = 1
    number = 1
    prime_numbers = primes(1000)
    while sigma_zero(prime_numbers, number) <= minimum:
        rank += 1
        number = int((rank * (rank + 1)) / 2)
    return int(number)

def parse_input(lines):
    return int(lines[0].strip())

if __name__ == "__main__":
    print(euler012(parse_input(sys.stdin.readlines())))
