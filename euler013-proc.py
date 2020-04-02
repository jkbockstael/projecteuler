#!/usr/bin/env python3

# Problem 13: Large sum
# https://projecteuler.net/problem=13

import sys

def euler013(numbers):
    width = len(numbers[0])
    carry = 0
    total = ''
    for i in range(1, width + 1):
        column = width -i
        column_sum = carry + sum(int(number[column]) for number in numbers)
        total = str(column_sum % 10) + total
        carry = int((column_sum - (column_sum % 10)) / 10)
    total = str(carry) + total
    return total[0:10]

def parse_input(lines):
    return [line.strip() for line in lines]

if __name__ == "__main__":
    print(euler013(parse_input(sys.stdin.readlines())))
