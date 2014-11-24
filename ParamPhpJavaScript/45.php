<?php
/**
 * Write a string function DecToHex(N) that returns a string containing the hexadecimal representation of a
 * nonnegative integer N. The string consists of characters "0"–"9", "A"–"F" and does not contain leading zeros
 * (except for the representation of zero number). Using this function, output hexadecimal representations of five
 * given integers.
 */
include'helper.php';
function DecToHex($N){
    echo dechex ($N).'<br/>';
}

DecToHex(65535);
DecToHex(255);
DecToHex(127);

