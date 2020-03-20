#!/usr/bin/env php
<?php
/** Problem 8: Largest product in a series
 * https://projecteuler.net/problem=8
 */

function euler008(int $count): int
{
    $sequence='7316717653133062491922511967442657474235534919493496983520312774
        50632623957831801698480186947885184385861560789112949495459501737958331
        95285320880551112540698747158523863050715693290963295227443043557668966
        48950445244523161731856403098711121722383113622298934233803081353362766
        14282806444486645238749303589072962904915604407723907138105158593079608
        66701724271218839987979087922749219016997208880937766572733300105336788
        12202354218097512545405947522435258490771167055601360483958644670632441
        57221553975369781797784617406495514929086256932197846862248283972241375
        65705605749026140797296865241453510047482166370484403199890008895243450
        65854122758866688116427171479924442928230863465674813919123162824586178
        66458359124566529476545682848912883142607690042242190226710556263211111
        09370544217506941658960408071984038509624554443629812309878799272442849
        09188845801561660979191338754992005240636899125607176060588611646710940
        50775410022569831552000559357297257163626956188267042825248360082325753
        0420752963450';
    $sequence = str_replace([' ', "\n"], '', $sequence);
    $largestProduct = 0;
    for ($i = 0; $i < strlen($sequence) - $count; $i++) {
        $product = 1;
        for ($j = $i; $j < $i + $count; $j++) {
            $product *= intval($sequence[$j]);
        }
        if ($product > $largestProduct) {
            $largestProduct = $product;
        }
    }
    return $largestProduct;
}

// Main
echo euler008(intval(trim(file_get_contents('php://STDIN')))) . PHP_EOL;