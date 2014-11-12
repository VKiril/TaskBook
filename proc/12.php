<?php
/**
 * Write a procedure SortInc3(A, B, C) that interchanges,
 * if necessary, the values of three variables A, B, C so that A ≤ B ≤ C
 * (A, B, C are input and output real-valued parameters). Using this procedure,
 * sort each of two given triples of real numbers (A1, B1, C1) and (A2, B2, C2)
 * in ascending order.
 */

function SortInc3(&$A, &$B, &$C){
    if(!($A <= $B) || !($A <= $C )){
        if(!($A <= $C)){
            echo"A is greater than B<br/>";
            $var = $A;
            $A = $C;
            $C = $var;
        }elseif(!($A <= $B)){
            echo'A is greater than C <br/>';
            $var = $A;
            $A = $B;
            $B = $var;
    } elseif($B <= $C){
            echo'B is greater than C <br>';
            $var = $B;
            $B = $C;
            $C = $var;
        }

    } else{
        echo 'is all right <br/>';
    }
}

$A1 = 1 ;
$B1 = 2 ;
$C1 = 3 ;

$A2 = 3 ;
$B2 = 2 ;
$C2 = 1 ;
echo 'before func. call <br/>a1 =&nbsp;'.$A1.', b1 =&nbsp;'.$B1.', c1 =&nbsp;'.$C1.'<br/>';
SortInc3($A1, $B1, $C1);
echo 'after func call <br/> a1 =&nbsp;'.$A1.', b1 =&nbsp;'.$B1.', c1 =&nbsp;'.$C1.'<br/>';
echo'<br/>';
echo 'before func. call <br/>a1 =&nbsp;'.$A2.', b1 =&nbsp;'.$B2.', c1 =&nbsp;'.$C2.'<br/>';
SortInc3($A2, $B2, $C2);
echo 'after func call <br/> a1 =&nbsp;'.$A2.', b1 =&nbsp;'.$B2.', c1 =&nbsp;'.$C2.'<br/>';
