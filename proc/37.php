<?php
/**
 * Write a real-valued function Power1(A, B) that returns the power AB
 * calculated by the formula AB = exp(B·ln(A)) (A and B are real-valued
 * parameters). In the case of zero-valued or negative parameter A the function
 * returns 0. Having input real numbers P, A, B, C and using this function,
 * find the powers AP, BP, CP.
 */

function Power1($A, $B){
    if($A <= 0){
        $AB = 0 ;
        return $AB;
    }
    $AB = exp($B*log($A));

    return $AB;
}
$P=4;
$A=5;
$B=6;
$C=-2;
echo('the power AB is : '.(Power1($A , $P))." when A is :".$A.' and B is : '.$P.'<br/>');
echo('the power AB is : '.(Power1($B , $P))." when A is :".$B.' and B is : '.$P.'<br/>');
echo('the power AB is : '.(Power1($C , $P))." when A is :".$C.' and B is : '.$P.'<br/>');
