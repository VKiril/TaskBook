<?php
/**
 * Write a real-valued function Sin1(x, ε) (x and ε are real numbers, ε > 0)
 * that returns an approximate value of the function sin(x) defined as follows:
 * sin(x) = x − x3/(3!) + x5/(5!) − … + (−1)n·x2·n+1/((2·n+1)!) + … .
 * Stop adding new terms to the sum when the absolute value of the next term will be
 * less than ε. Using this function, find the approximate values of the function sin(x)
 * at a given point x for six given ε.
 */

function Sin1($x, $ε){
    //sin()
    $factorial_1 = 1 ;
    $factorial_2 = 1 ;
    $n_1 = 1 ;
    $n_2 = $n_1 + 2 ;

    $sin = $x;
    while($factorial_2 > $ε || $factorial_1 > $ε){
        for( $i = $n_1 ; $i > 0 ; $i -- ){
            $factorial_1 = $factorial_1* $i;
        }
        for( $i = $n_2 ; $i > 0 ; $i -- ){
            $factorial_2 = $factorial_2* $i;
        }
        $sin = $sin + $x / $factorial_2 - $x / $factorial_1;
    }

    return $sin ;
}
$x1 = 5 ; $ε1 = 0.1 ;
$x2 = 4 ; $ε2 = 0.01 ;
$x3 = 6 ; $ε3 = 0.001 ;
$x4 = 9 ; $ε4 = 0.0001 ;

echo 'an approximate value of the function sin(x) when x is '.$x1.' and ε is '.$ε1.' ----- '.Sin1($x1 , $ε1)."<br/>";
echo 'an approximate value of the function sin(x) when x is '.$x2.' and ε is '.$ε2.' ----- '.Sin1($x2 , $ε2)."<br/>";
echo 'an approximate value of the function sin(x) when x is '.$x3.' and ε is '.$ε3.' ----- '.Sin1($x3 , $ε3)."<br/>";
echo 'an approximate value of the function sin(x) when x is '.$x4.' and ε is '.$ε4.' ----- '.Sin1($x4 , $ε4)."<br/>";