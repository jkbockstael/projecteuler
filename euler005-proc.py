#!/usr/bin/env python3

# Problem 5: Smallest multiple
# https://projecteuler.net/problem=5

import sys

def divided_by_all_up_to(bound, number):
    for divisor in range(1, bound + 1):
        if number % divisor != 0:
            return False
    return True

def euler005(bound):
    number = bound
    while True:
        if divided_by_all_up_to(bound, number):
            return number
        else:
            number += 2

def parse_input(lines):
    return int(lines[0].strip())

if __name__ == "__main__":
    print(euler005(parse_input(sys.stdin.readlines())))
