<?php
/**
 * Write a real-valued function Power2(A, N) that returns the power AN calculated by the following formulas:
 * A0 = 1;
 * AN = A·A·…·A    (N factors),    if N > 0;
 * AN = 1/(A·A·…·A)    (|N| factors),    if N < 0
 * (A is a real-valued parameter, N is an integer parameter). Having input a real
 * number A and integers K, L, M and using this function, find the powers AK, AL, AM.
 */
function Power2($A, $N){
    $AN = 0 ;
    if($N == 0 ){
        $AN = 1 ;
    }elseif ($N > 0 ){
        $AN = pow($A , $N);
    } else {
        $AN = pow($A , abs($N));
        $AN = 1 / $AN ;
    }
    return $AN ;
}

$A = 3 ;
$K = 5 ;
$L = 0 ;
$M = -2 ;
echo 'the power AN is '.(Power2($A , $K)).' when A is '.$A.' and N is '.$K.'<br/>';
echo 'the power AN is '.(Power2($A , $L)).' when A is '.$A.' and N is '.$L.'<br/>';
echo 'the power AN is '.(Power2($A , $M)).' when A is '.$A.' and N is '.$M.'<br/>';
