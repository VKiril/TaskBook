<?php
/**
 * Write a procedure AddRightDigit(D, K) that adds a digit D to the
 * right side of the decimal representation of a positive integer K
 * (D is an input integer parameter with the value in the range 0 to 9,
 * K is an input and output integer parameter). Having input an integer K
 * and two one-digit numbers D1, D2 and using two calls of this procedure,
 * sequentially add the given digits D1, D2 to the right side of the given K
 * and output the result of each adding.
 */

function AddRightDigit($D, &$K) {
    $K = $D.$K;
}
$var1 = 12;
$var2 = 34;
AddRightDigit($var1, $var2);
echo $var2.'<br/>';
$var3 = 1001;
AddRightDigit($var3, $var2);
echo $var2;