<?php
/**
 * Write a string function DecToBin(N) that returns a string containing the binary representation of a
 * nonnegative integer N. The string consists of characters "0", "1" and does not contain leading zeros
 * (except for the representation of zero number). Using this function, output binary representations of
 * five given integers.
 */
include'helper.php';
function DecToBin($N){
    echo decbin($N).'<br/>';
}

DecToBin(65535);
DecToBin(255);
DecToBin(127);
