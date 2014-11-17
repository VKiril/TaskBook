<?php
/**
 * Write a procedure AddLeftDigit(D, K) that adds a digit D to the left
 * side of the decimal representation of a positive integer K (D is an
 * input integer parameter with the value in the range 0 to 9, K is an input
 * and output integer parameter). Having input an integer K and two one-digit
 * numbers D1, D2 and using two calls of this procedure, sequentially add the given
 * digits D1, D2 to the left side of the given K and output the result of each adding.
 */

function AddRightDigit($D, &$K) {
    $K = $K.$D;
}
$D1 = 12;
$var2 = 34;
AddRightDigit($D1, $var2);
echo $var2.'<br/>';
$D2 = 1001;
AddRightDigit($D2, $var2);
echo $var2;