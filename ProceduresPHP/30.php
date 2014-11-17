<?php
/**
 * Write an integer function DigitN(K, N) that returns the N-th
 * digit in the decimal representation of a positive integer K
 * provided that the digits are numbered from right to left.
 * If the amount of digits is less than N then the function returns −1.
 * Using this function, output sequentially 1st, 2nd, 3rd, 4th, 5th digit
 * for each of five given positive integers K1, K2, …, K5.
 */



function DigitN($K, $N){
    return substr($K, $N, 1);
}
$k1  = 243654;
$k2  = 356;
$k3  = 7654543543;
$k4  = 542345432;
$k5  = 65424368654;

echo '<br/> the element 1 of '.$k1.' is '. (DigitN($k1 , 1));
echo '<br/> the element 2 of '.$k2.' is '. (DigitN($k2 , 2));
echo '<br/> the element 3 of '.$k3.' is '. (DigitN($k3 , 3));
echo '<br/> the element 4 of '.$k4.' is '. (DigitN($k4 , 4));
echo '<br/> the element 5 of '.$k5.' is '. (DigitN($k5 , 5));