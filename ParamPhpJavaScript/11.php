<?php
/**
 * Write a procedure SortArray(A, N) that sorts an array A of N real numbers in ascending order.
 * The array A is an input and output parameter. Using this procedure, sort three given arrays
 * A, B, C of size NA, NB, NC respectively.
 */
include 'helper.php';
function SortArray(&$A, $N=0){
    $N = sizeof($A);
    $min = 0;
    for($i = 0 ;$i < $N ; $i++ ){
        for($j = 0 ; $j < $N ; $j++) {
            if($A[$i] < $A[$j]){
                $min = $A[$j];
                $A[$j] = $A[$i];
                $A[$i] =$min;
            }
        }
    }
    //asort($A);
}



$arr = [9,8,7,6,5,4,3,2,1];
print_r($arr);echo('<br/>');
SortArray($arr);
print_r($arr);echo('<br/>');
