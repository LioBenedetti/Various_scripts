<?php
/**
 * ------------------------------------------------------------------------------
 * "THE BEER-WARE LICENSE" (Revision 42):
 * <lionel@benedetti.xyz> wrote this file. As long as you retain this notice you
 * can do whatever you want with this stuff. If we meet some day, and you think
 * this stuff is worth it, you can buy me a beer in return. Lionel
 * ------------------------------------------------------------------------------
 */

if ($argc < 4){
    echo "Please provide at least 3 names !";
    die("Usage : " . $argv[0] . " Gontran Jean-Gerald Yvette ..." . PHP_EOL);
}
array_splice($argv, 0, 1);
$sibs = $argv;
$i=0;

echo "C la féét' !\n~~~~~~~~~~~~\n\n";

do{
    $name = $argv[$i];
    $lucky_one = $argv[array_rand($sibs, 1)];
    if ($lucky_one == $argv[$i])
	continue;
    echo $name . " offira un cadeau à " . $lucky_one. PHP_EOL;
    unset($sibs[array_search($lucky_one,$sibs)]);
    $i++;
} while (count($sibs) > 0);
