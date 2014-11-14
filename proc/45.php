<?php
/**
 * Write a real-valued function Power4(x, a, ε) (x, a, ε are real numbers, |x| < 1, a, ε > 0)
 * that returns an approximate value of the function (1 + x)a defined as:
 * (1 + x)a = 1 + a·x + a·(a−1)·x2/(2!) + … + a·(a−1)·…·(a−n+1)·xn/(n!) + … .
 * Stop adding new terms to the sum when the absolute value of the next term will be
 * less than ε. Using this function, find the approximate values of the function (1 + x)a
 * at a given point x for a given exponent a and six given ε.
 */

function Power4($x, $a, $ε){
    if(!(abs($x) < 1 && $ε > 0) ){

        return '\'incorrect parameters \'';
    }
    $factorial = 1 ;
    $n = 1 ;
    $term1 = 1 ;
    $expression = 1 ;
    while($term1>$ε){
        for( $i = $a ; $i > 0 ; $i -- ){
            $factorial = $factorial* $i;
            $a = $a * (--$a);
        }
        $factorial = $factorial * ($a+1);
        $term1 = (($a * pow($x , $n)) / $factorial);
        $expression =($expression + $term1) ;
        $n++;
    }

    return $expression ;

}
$x = 0.5;
$a = 3;
$ε = 0.3;
echo ' simple function test '.Power4($x, $a, $ε).' with parameters x, a, ε : '.$x." , ".$a." , ".$ε.'<br/>';

$x = 11;
$a = 10;
$ε = 0.2;
echo ' simple function test '.Power4($x, $a, $ε).' with parameters x, a, ε : '.$x." , ".$a." , ".$ε.'<br/>';