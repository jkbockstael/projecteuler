# Project Euler

Solutions for Project Euler problems, just for fun and maybe as a source of inspiration for those who struggle with some of the problems.

Each solution is implemented as a CLI program that reads the problem parameter from standard input and prints the solution result on standard output.

    $ echo '1000' | ./euler001-proc.php
    233168

Problem inputs are provided in `-input` files, for each problem.

Project Euler problem statements provide some form of test case, usually in the form of a smaller input value and the expected output value. These are provided here for each problem in `-testinput` and `-testexpected` files. For convenience, an automated test script is provided. This test script loops through all programs in the directory and executes them against the matching test input and expected output files.

    $ ./test.sh
    ✓ euler001-func.php : OK
    ✓ euler001-proc.php : OK
    ✓ euler002-func.php : OK
    ✓ euler002-proc.php : OK
    ✓ euler003-func.php : OK
    ✓ euler003-proc.php : OK
    ✓ euler004-proc.php : OK
    ✓ euler005-proc.php : OK
    ✓ euler006-proc.php : OK
    ✓ euler007-proc.php : OK
    ✓ euler008-proc.php : OK
    ✓ euler009-proc.php : OK
    ✓ euler010-proc.php : OK

Feel free to do whatever you want with all this code.
