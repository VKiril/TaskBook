<?php
/**
 *  Write a procedure DoubleX(A, N, X) that doubles occurrences of all elements equal an
 * integer X for an array A of N integers. The array A and its size N are input and output
 * parameters. Using this procedure, double occurrences of elements with given values
 * XA, XB, XC for three given arrays A, B, C of size NA, NB, NC respectively and output the new
 * size and elements of each changed array.
 */

include 'helper.php';

function DoubleX(&$A, $N, $X){
    for($i = 0; $i < $N ; $i++){
        if($A[$i] == $X){
            $A[$i] = $A[$i]*2 ;
        }
    }
}

$arr = [12,32,43,54,3,12,43,2,12,43,12];
print_r($arr);echo('<br/>');
DoubleX($arr ,6 , 12);
print_r($arr);echo('<br/>');

DoubleX($arr ,11 , 12);
print_r($arr);echo('<br/>');