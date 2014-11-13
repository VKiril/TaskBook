<?php
/**
 * Write a real-valued function Fact(N) that returns a factorial
 * of a positive integer N: N! = 1·2·…·N (the real return type
 * allows to avoid the integer overflow during the calculation of
 * the factorials for large values of the parameter N). Using this
 * function, find the factorials of five given integers.
 */

function Fact($n){

    return $n?$n*Fact($n-1):1;
}
echo(Fact(10)).'<br/>';
echo(Fact(5)) .'<br/>';
echo(Fact(14)).'<br/>';
echo(Fact(20)).'<br/>';
