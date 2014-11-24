<?php
/**
 * Write an integer function BinToDec(S) that returns a nonnegative integer whose binary representation is
 * contained in a string parameter S. The parameter S consists of characters "0", "1" and does not contain
 * leading zeros (except for the representation of zero number). Using this function, output five integers
 * whose binary representations are given.
 */

function BinToDec($N){
    echo bindec($N).'<br/>';
}

include'helper.php';

BinToDec(1111111111111111);
BinToDec(11111111);
BinToDec(1111);