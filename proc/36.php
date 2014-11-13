<?php
/**
 * Write an integer function Fib(N) that returns the value of N-th term of the sequence of the
 * Fibonacci numbers. The Fibonacci numbers FK are defined as follows:
 * F1 = 1,        F2 = 1,        FK = FK−2 + FK−1,    K = 3, 4, … .
 * sing this function, find five Fibonacci numbers with given order numbers N1, N2, …, N5.
 */
function Fib($N){
    $x = 0 ;
    $y = 1 ;
    $z = 0 ;

    while($z < $N) {

        $z = $x + $y;
        echo($z."<br />");
        $x = $y;
        $y = $z;
    }
}


Fib(50);