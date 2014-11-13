<?php
/**
 * Write a logical function IsSquare(K) that returns True,
 * if an positive integer parameter K is a square of some integer,
 * and False otherwise. Using this function, find the amount of squares
 * in a given sequence of 10 positive integers.
 */

function IsSquare($K){
    $request = '';
    for ($i = 1 ; $i< $K ; $i++){
        if(pow($i , 2) == $K){
            $request = 'true';
            return $request;
        }else{
            $request = 'false';
        }

    }
    return $request;
}
$var1 = 144 ;
echo 'the given number is : '.$var1.' is this number of a square of some integer ? '.(IsSquare($var1)).'<br/>';
$var = 169 ;
echo 'the given number is : '.$var.' is this number of a square of some integer ? '.(IsSquare($var)).'<br/>';
$var2 = 200 ;
echo 'the given number is : '.$var2.' is this number of a square of some integer ? '.(IsSquare($var2)).'<br/>';