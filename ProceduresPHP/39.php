<?php
/**
 * Using the Power1 and Power2 functions (see Proc37 and Proc38),
 * write a real-valued function Power3(A, B) that returns the power
 * AB calculated as follows (A and B are real-valued parameters): if
 * B has a zero-valued fractional part then the function Power2(A, N)
 * is called (an integer variable N is equal to B), otherwise the function
 * Power1(A, B) is called. Having input real numbers P, A, B, C and using the
 * Power3 function, find the powers AP, BP, CP.
 */


include '38.php';
include '37.php';

function Power3($A, $B){
    $var = ceil ($B);
    if($var === $B){
        $result = Power1($A , $B);
    } else {
        $result = Power2($A , $B);
    }

    return $result;
}

$A = 3 ;
$K = 5.2 ;
$L = 0 ;
$M = 2 ;
echo 'the power AN is '.(Power2($A , $K)).' when A is '.$A.' and N is '.$K.'<br/>';
echo 'the power AN is '.(Power2($A , $L)).' when A is '.$A.' and N is '.$L.'<br/>';
echo 'the power AN is '.(Power2($A , $M)).' when A is '.$A.' and N is '.$M.'<br/>';

/*    */