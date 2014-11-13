<?php
/**
 * Write an integer function RootCount(A, B, C) that returns the amount
 * of roots of the quadratic equation A·x2 + B·x + C = 0 (A, B, C are
 * real-valued parameters, A ≠ 0). Using this function, find the amount
 * of roots for each of three quadratic equations with given coefficients.
 * Note that the amount of roots is determined by the value of a discriminant:
 *   D = B2 − 4·A·C.
 */


function RootCount($A, $B, $C){
 $d = ($B*$B) - (4 * $A * $C)  ;
 $x1 = (-($B)-sqrt($d))/(2*$A);
 $x2 = (-($B)+sqrt($d))/(2*$A);

 return (array(
     'x1' => number_format($x1, 3, ',', ' '),
     'x2' => number_format($x2, 3, ',', ' '),
 ));
}

print_r(RootCount(4,5,(-4)));
echo'<br/>';
$roots = RootCount(4,5,(-4));
$inc = 0 ;
foreach($roots as $root ){

    echo ' root'.$inc.' is '. $root.'<br/>';
    $inc ++ ;
}