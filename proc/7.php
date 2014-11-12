<?php
/**
 * Write a procedure InvDigits(K) that inverts the order of
 * digits of a positive integer K (K is an input and output
 * integer parameter). Using this procedure, invert the order of
 * digits for each of five given integers.
 */

function InvDigits(&$K){
    $K = strrev($K);
}
$var = 12345;
echo 'input number is '.$var;
InvDigits( $var );
echo '<br/>output number is '.$var;