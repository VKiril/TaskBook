<?php
/**
 * Write a logical function IsPrime(N) that returns True, if an integer parameter N (> 1)
 * is a prime number, and False otherwise. Using this function, find the amount of prime numbers
 * in a given sequence of 10 integers greater than 1. Note that an integer (> 1) is called a
 * prime number if it has not positive divisors except 1 and itself.
 */

function IsPrime($N){
    $response = '';
    $numbers = '';
    $inc = 0 ;

    for($i = 2 ; $i < $N ; $i ++){
        if($N % $i == 0){
            $inc ++ ;
            $response = 'this is not prim number';
            $numbers = $numbers . $i ." , ";
        }
    }
    if($inc == 0){
        $response = " this isa prim number";
        $numbers = 'zero';
    }

    return array(
        'status'           => $response,
        'numbers'            => $numbers,
        'how_many_numbers'   => $inc,
    );
}

print_r(IsPrime(44));
echo"<br/>";
print_r(IsPrime(41));
