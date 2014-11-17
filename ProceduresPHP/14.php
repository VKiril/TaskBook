<?php
/**
 * Write a procedure ShiftRight3(A, B, C) that performs a right cyclic
 * shift by assigning the initial values of A, B, C to variables B, C, A
 * respectively (A, B, C are input and output real-valued parameters).
 * Using this procedure, perform the right cyclic shift for each of two given
 * triples of real numbers: (A1, B1, C1) and (A2, B2, C2).
 */
function hr(){
    echo'<div style="width: 50%;"><hr/></div>';
}
function ShiftRight3(&$A, &$B, &$C){
    $var = $A ;
    $A = $B ;
    $B = $C ;
    $C = $var;

}
$A1=10;
$B1=15;
$C1=20;
hr();
echo "before shifting A1 is :".$A1.' , B1 is :'.$B1.' , C1 is : '.$C1.'<br/>';

ShiftRight3($A1, $B1, $C1);

echo '&nbsp;&nbsp;&nbsp;'. "after shifting  A1 is :".$A1.' , B1 is :'.$B1.' , C1 is : '.$C1.'<br/>';
hr();
ShiftRight3($A1, $B1, $C1);
/*  block just_for_curiosity */
    echo '&nbsp;&nbsp;&nbsp;'. "after shifting  A1 is :".$A1.' , B1 is :'.$B1.' , C1 is : '.$C1.'<br/>';
    hr();
/* endblock*/
$A2=110;
$B2=115;
$C2=120;
echo "before shifting A2 is :".$A2.' , B2 is :'.$B2.' , C2 is : '.$C2.'<br/>';

ShiftRight3($A2, $B2, $C2);

echo '&nbsp;&nbsp;&nbsp;'. "after shifting  A2 is :".$A2.' , B2 is :'.$B2.' , C2 is : '.$C2.'<br/>';
hr();
