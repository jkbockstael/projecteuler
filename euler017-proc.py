#!/usr/bin/env python3

# Problem 17: Number letter counts
# https://projecteuler.net/problem=17

import sys

LENGTHS = {
    0: 0,
    1: 3,
    2: 3,
    3: 5,
    4: 4,
    5: 4,
    6: 3,
    7: 5,
    8: 5,
    9: 4,
    10: 3,
    11: 6,
    12: 6,
    13: 8,
    14: 8,
    15: 7,
    16: 7,
    17: 9,
    18: 8,
    19: 8,
    20: 6,
    30: 6,
    40: 5,
    50: 5,
    60: 5,
    70: 7,
    80: 6,
    90: 6,
    100: 7,
    1000: 8,
    "and": 3}

def length(number):
    if number <= 20:
        return LENGTHS[number]
    if number < 100:
        units = number % 10
        return LENGTHS[number - units] + LENGTHS[units]
    if number < 1000:
        if number % 100 == 0:
            return LENGTHS[number // 100] + LENGTHS[100]
        else:
            tens_and_units = number % 100
            return length(number - tens_and_units) + LENGTHS["and"] \
                + length(tens_and_units)
    if number == 1000:
        return LENGTHS[1] + LENGTHS[1000]

def euler017(bound):
    return sum(length(number) for number in range(1, bound + 1))

def parse_input(lines):
    return int(lines[0].strip())

if __name__ == "__main__":
    print(euler017(parse_input(sys.stdin.readlines())))
