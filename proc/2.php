<?php
/* Write a procedure PowerA234(A, B, C, D) that computes the second,
the third, and the fourth degrees of a real number A and assigns the results
to real variables B, C, and D respectively (A is an input parameter, B, C, D
are output parameters). Using this procedure, find the second, the third, and the
fourth degrees of five given real numbers. */
function PowerA234($A , &$B=0 , &$C=0, &$D=0){
    $B = $A*$A ;
    $C = $A*$A*$A;
    $D = $A*$A*$A*$A;
}

PowerA234(3 , $a,$b,$c);
echo $a.'<br/>';
echo $b.'<br/>';
echo $c.'<br/>';
/* a little change for this file   */