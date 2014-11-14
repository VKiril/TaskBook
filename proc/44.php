<?php
/**
 * Write a real-valued function Atan1(x, ε) (x and ε are real numbers, |x| < 1, ε > 0)
 * that returns an approximate value of the function atan(x) defined as follows:
 * atan(x) = x − x3/3 + x5/5 − … + (−1)n·x2·n+1/(2·n+1) + … .
 * Stop adding new terms to the sum when the absolute value of the next term will be less than ε.
 * Using this function, find the approximate values of the function atan(x) at a given point x for six given ε.
 */

function Atan1($x, $ε){

    if($ε <= 0){

        return 'ε is negative number ' ;
    }
    $n_1 = 1 ;
    $n_2 = $n_1 + 2 ;
    $a1=$a2=0;

    $atan = $x;
    while($a1 > $ε || $a2 > $ε){
        $a1 = ((pow($x,$n_1)) / ($n_1));
        $a2 =($atan + ((pow($x,$n_2)))/($n_2));
        $atan =  $a2-$a1 ;
        $n_1 += 2 ;
        $n_2 = $n_1 + 2 ;
    }

    return $atan ;
}
$x1 = 5 ; $ε1 = 0.1 ;
$x2 = 4 ; $ε2 = 0.01 ;
$x3 = 6 ; $ε3 = 0.001 ;
$x4 = 9 ; $ε4 = 0.0001 ;

echo 'an approximate value of the function atan(x) when x is '.$x1.' and ε is '.$ε1.' ----- '.Atan1($x1 , $ε1)."<br/>";
echo 'an approximate value of the function atan(x) when x is '.$x2.' and ε is '.$ε2.' ----- '.Atan1($x2 , $ε2)."<br/>";
echo 'an approximate value of the function atan(x) when x is '.$x3.' and ε is '.$ε3.' ----- '.Atan1($x3 , $ε3)."<br/>";
echo 'an approximate value of the function atan(x) when x is '.$x4.' and ε is '.$ε4.' ----- '.Atan1($x4 , $ε4)."<br/>";