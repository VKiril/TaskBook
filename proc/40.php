<?php
/**
 * Write a real-valued function Exp1(x, ε) (x and ε are real numbers, ε > 0)
 * that returns an approximate value of the function exp(x) defined as follows:
 * exp(x) = 1 + x + x2/(2!) + x3/(3!) + … + xn/(n!) + …
 * (n! = 1·2·…·n). Stop adding new terms to the sum when the value of the next
 * term will be less than ε. Using this function, find the approximate values
 * of the function exp(x) at a given point x for six given ε.
 */

function Exp1( $x, $ε ){
    $n = 1 ;
    $val = 1 ;
    $exp = 1 ;

    while( $val > $ε ){

        $factorial = 1 ;
        for( $i = $n ; $i > 0 ; $i -- ){
            $factorial = $factorial* $i;
        }
        $val = $x * $n / $factorial;
        $exp += $val ;
        $n++;
    }

    return $val ;
}
$x1 = 5 ; $ε1 = 0.1 ;
$x2 = 4 ; $ε2 = 0.01 ;
$x3 = 6 ; $ε3 = 0.001 ;
$x4 = 9 ; $ε4 = 0.0001 ;
echo 'an approximate value of the function exp(x) when x is '.$x1.' and ε is '.$ε1.' ----- '.Exp1($x1 , $ε1)."<br/>";
echo 'an approximate value of the function exp(x) when x is '.$x2.' and ε is '.$ε2.' ----- '.Exp1($x2 , $ε2)."<br/>";
echo 'an approximate value of the function exp(x) when x is '.$x3.' and ε is '.$ε3.' ----- '.Exp1($x3 , $ε3)."<br/>";
echo 'an approximate value of the function exp(x) when x is '.$x4.' and ε is '.$ε4.' ----- '.Exp1($x4 , $ε4)."<br/>";