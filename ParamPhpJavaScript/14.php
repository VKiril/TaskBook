<?php
/**
 * Write a procedure Split1(A, NA, B, NB, C, NC) that copies elements of an
 * array A of NA real numbers to arrays B and C so that the array B contains
 * all elements of the array A with odd order numbers (1, 3, …) and the array
 * C contains all elements of the array A with even order numbers (2, 4, …).
 * The arrays B, C and their sizes NB, NC are output parameters. Apply this procedure
 * to a given array A of size NA and output the size and the elements for each of the
 * resulting arrays B and C.
 */
include'helper.php';
function Split1(&$A, &$B, &$C, $NB=0, $NC=0, $NA=0){
    $NA = sizeof($A);
    $iterator = 0 ;
    for ($i = 0 ; $i < $NA ; $i += 2){
        $B[$iterator] = $A[$i];
        $iterator++;
    }
    $iterator = 0 ;
    for ($i = 1 ; $i < $NA ; $i += 2){
        $C[$iterator] = $A[$i];
        $iterator++;
    }

}


$arr = [1,2,3,4,5,6,7,8,9];
$b = [];$c = [];
print_r($arr);echo('<br/>');
Split1($arr , $b , $c);
print_r($b);echo(' b <br/>');
print_r($c);echo(' c <br/>');