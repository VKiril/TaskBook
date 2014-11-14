<?php
/**
 * Write a real-valued function Ln1(x, ε) (x and ε are real numbers, |x| < 1, ε > 0)
 * that returns an approximate value of the function ln(1 + x) defined as follows:
 * ln(1 + x) = x − x2/2 + x3/3 − … + (−1)n·xn+1/(n+1) + … .
 * Stop adding new terms to the sum when the absolute value of the next term will
 * be less than ε. Using this function, find the approximate values of the
 * function ln(1 + x) at a given point x for six given ε
 */

function Ln1($x, $ε){
    if($ε <= 0){

        return 'ε is negative number ' ;
    }
    $factorial_1 = 1 ;
    $factorial_2 = 1 ;
    $n_1 = 1 ;
    $n_2 = $n_1 + 1 ;

    $ln = $x;
    while($factorial_2 > $ε || $factorial_1 > $ε){
        for( $i = $n_1 ; $i > 0 ; $i -- ){
            $factorial_1 = $factorial_1* $i;
        }
        for( $i = $n_2 ; $i > 0 ; $i -- ){
            $factorial_2 = $factorial_2* $i;
        }
        $ln = (($ln + ((pow($x,$n_2)) / $n_1)) - ((pow($x,$n_1)) / $n_2));
        $n_1 ++ ;
        $n_2 = $n_1 + 1 ;
    }

    return $ln ;
}