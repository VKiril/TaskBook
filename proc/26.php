<?php
/**
 * Write a logical function IsPower5(K) that returns True,
 * if an positive integer parameter K is equal to 5 raised to
 * some integer power, and False otherwise. Using this function,
 * find the amount of powers of base 5 in a given sequence of 10
 * positive integers.
 */

function IsPower5($K){
    $request = '';
    for ($i = 1 ; $i< $K ; $i++){
        if(pow(5 , $i) == $K){
            $request = 'true';
            return $request;
        }else{
            $request = 'false';
        }

    }
    return $request;
}
$var1 = 25 ;
echo 'the given number is : '.$var1.' is this number of a square of some integer ? '.(IsPower5($var1)).'<br/>';
$var = 625 ;
echo 'the given number is : '.$var.' is this number of a square of some integer ? '.(IsPower5($var)).'<br/>';
$var2 = 200 ;
echo 'the given number is : '.$var2.' is this number of a square of some integer ? '.(IsPower5($var2)).'<br/>';