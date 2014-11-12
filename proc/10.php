<?php
/**
 * Write a procedure Swap(X, Y) that exchanges the values
 * of variables X and Y (X and Y are input and output real-valued parameters).
 * Having input integers A, B, C, D and using three calls of this procedure,
 * sequentially exchange the values of the pairs A and B, C and D, B and C.
 * Output the new values of A, B, C, D.
 */

function Swap(&$X, &$Y){
    $var = $X;
    $X=$Y;
    $Y = $var;
}
$A=12;
$B=13;
$C=14;
$D=15;
echo 'A &nbsp = &nbsp '.$A.',&nbsp B =&nbsp'.$B.', C &nbsp = &nbsp '.$C.',&nbsp D = &nbsp'.$D.'<br/>';
Swap($A, $B);
echo 'A &nbsp = &nbsp '.$A.',&nbsp B =&nbsp'.$B.', C &nbsp = &nbsp '.$C.',&nbsp D = &nbsp'.$D.'<br/>';
Swap($C, $D);
echo 'A &nbsp = &nbsp '.$A.',&nbsp B =&nbsp'.$B.', C &nbsp = &nbsp '.$C.',&nbsp D = &nbsp'.$D.'<br/>';
Swap($B, $C);
echo 'A &nbsp = &nbsp '.$A.',&nbsp B =&nbsp'.$B.', C &nbsp = &nbsp '.$C.',&nbsp D = &nbsp'.$D.'<br/>';


