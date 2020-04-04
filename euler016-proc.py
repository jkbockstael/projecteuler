#!/usr/bin/env python3

# Problem 16: Power digit sum
# https://projecteuler.net/problem=16

import sys

def double(number):
    result = []
    carry = 0
    for i in range(len(number)):
        total = number[i] * 2 + carry
        digit = total % 10
        carry = (total - digit) // 10
        result.append(digit)
    if carry > 0:
        result.append(carry)
    return result

def euler016(power):
    number = [2]
    for i in range(1, power):
        number = double(number)
    return sum(number)

def parse_input(lines):
    return int(lines[0].strip())

if __name__ == "__main__":
    print(euler016(parse_input(sys.stdin.readlines())))
