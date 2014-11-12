<?php
/**
 * Write a procedure DigitCountSum(K, C, S) that finds the amount C of digits
 * in the decimal representation of a positive integer K and also the sum S of
 * its digits (K is an input parameter, C and S are output parameters, all parameters
 * are the integer ones). Using this procedure, find the amount and the sum of digits
 * for each of five given integers.
 */

function DigitCountSum($K, &$C, &$S){
    foreach( str_split($K) as $var ){
            $S +=$var;
    }
    $C = strlen((string)$K);
}

DigitCountSum(14235, $a , $b);
echo 'length is : '.$a.'<br/>sum is :'.$b;