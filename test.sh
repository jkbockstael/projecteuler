#!/bin/bash

# Simple testing script for Project Euler solutions
#
# This script relies on a couple conventions:
# - each program file name starts with "eulerXXX", where XXX is the zero-padded
#   problem number
# - for each problem there are two test support files:
#   - eulerXXX-testinput, that contains the example input from the problem page
#   - eulerXXX-testexpected, that contains the correct output for that input

for program in $(ls euler*.php euler*.py); do
    basename=${program:0:8}
    test_input_file="${basename}-testinput"
    test_expected_output_file="${basename}-testexpected"
    if [ ! -f $test_input_file ]; then
        echo "Missing test input file for ${program}" >&2
        continue
    fi
    if [ ! -f $test_expected_output_file ]; then
        echo "Missing test expected output file for ${program}" >&2
        continue
    fi
    if [ ! -x $program ]; then
        echo "Cannot execute ${program}" >&2
        continue
    fi
    test_result=$(./$program < $test_input_file)
    expected_value=$(< $test_expected_output_file)
    color_red=$(tput setaf 9)
    color_green=$(tput setaf 2)
    color_reset=$(tput sgr0)
    if [ "$test_result" = "$expected_value" ]; then
        echo "${color_green}✓${color_reset} $program"
    else
        echo "${color_red}✗${color_reset} $program"
    fi
done
