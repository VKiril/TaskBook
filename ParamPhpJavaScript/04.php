<?php
/**
 * Write a procedure Inv(A, N) that changes the order of elements of an array
 * A of N real numbers to inverse one (the array A is an input and output parameter).
 * Using this procedure, change order of elements of arrays A, B, C
 * whose sizes are NA, NB, NC respectively.
 */
function Inv(&$A, $N){
    $len = sizeof($A);
    //echo $len;
    $inverse = array();
    $inc =$len-1 ;
    $i = array();
    foreach($A as $element){
        $i[$inc] = $element;
        $inc --;

    }
    $A = array();
    $A = $i;

}

$arr = [2,3,5,1,54,23,21];
print_r($arr);echo('<br/>');
Inv($arr , 5);
print_r($arr);