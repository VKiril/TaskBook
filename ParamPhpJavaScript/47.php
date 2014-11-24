<?php
/**
 * Write an integer function HexToDec(S) that returns a nonnegative integer whose hexadecimal representation
 * is contained in a string parameter S. The parameter S consists of characters "0"–"9", "A"–"F" and does not
 * contain leading zeros (except for the representation of zero number). Using this function, output five integers
 * whose hexadecimal representations are given.
 */
include'helper.php';
function HexToDec($N){
    echo hexdec  ($N).'<br/>';
}

HexToDec('ffff');
HexToDec('ff');
HexToDec('f');
HexToDec('acbd');