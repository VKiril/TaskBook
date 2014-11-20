<?php
/**
 *Write a procedure RemoveX(A, N, X) that removes all elements equal an integer X
 * from an array A of N integers. The array A and its size N are input and output parameters.
 * Using this procedure, remove elements with given values XA, XB, XC from three given arrays
 * A, B, C of size NA, NB, NC respectively and output the new size and elements of each changed array.
 */

include'helper.php';
function  RemoveX(&$A, $N, $X){
    $N = sizeof($A);
    for($i = 0 ; $i < $N; $i++){
        if($A[$i] == $X){
            unset($A[$i]);
        }
    }
}

$arr = [1,32,54,21,65,78,4,3,2,25,6,7,8,4,5,6,7,8,9];
print_r($arr);echo('<br/>');
RemoveX($arr , 0 , 7);
print_r($arr);