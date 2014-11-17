<?php
/**
 * Write a logical function IsPowerN(K, N) that returns True,
 * if an positive integer parameter K is equal to N (> 1) raised
 * to some integer power, and False otherwise. Having input an integer
 * N (> 1) and a sequence of 10 positive integers and using this function,
 * find the amount of powers of base N in the given sequence.
 */
function IsPowerN($K, $N){
    $request = '';
    for ($i = 1 ; $i< $K ; $i++){
        if(pow($N , $i) == $K){
            $request = 'true';

            return $request;
        }else{
            $request = 'false';
        }

    }

    return $request;
}

$K1 = 25 ;$N1 = 5 ;
echo' if an positive integer parameter '.$K1.' is equal to '.$N1.' (> 1) raised to some integer power write true , otherwise false: '.IsPowerN($K1 , $N1).'<br/>';
$K2 = 26 ;
echo' if an positive integer parameter '.$K2.' is equal to '.$N1.' (> 1) raised to some integer power write true , otherwise false: '.IsPowerN($K2 , $N1).'<br/>';