<?php
/**
 * Write a procedure ShiftLeft3(A, B, C) that performs a left cyclic shift by
 * assigning the initial values of A, B, C to variables C, A, B respectively
 * (A, B, C are input and output real-valued parameters). Using this procedure,
 * perform the left cyclic shift for each of two given triples of real numbers:
 * (A1, B1, C1) and (A2, B2, C2).
 */

function ShiftLeft3(&$A, &$B, &$C){
    $var = $C;
    $C = $B ;
    $B = $A ;
    $A = $var;

}

$A1=10;
$B1=20;
$C1=30;
echo "before shift A is : ".$A1.' B is : '.$B1.' C is :'.$C1.'<br/>';
ShiftLeft3($A1, $B1, $C1);
echo '&nbsp; &nbsp;'."after shift  A is : ".$A1.' B is : '.$B1.' C is :'.$C1.'<br/>';