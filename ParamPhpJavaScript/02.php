<?php
/**
 * Write an integer function MaxNum(A, N) that returns the order
 * number of the maximal element of an array A of N real numbers.
 * Using this function, find the order numbers of the maximal elements
 * of three given arrays A, B, C whose sizes are NA, NB, NC respectively.
 */

include 'helper.php';

function MaxElem($A, $N){
    $min = $A[0];
    for($i = 0 ; $i < $N ; $i ++){
        if($min < $A[$i]){
            $min = $A[$i] ;
        }
    }
    return $min ;
}


$arr1 =  [10,2,4,3,6,1,98,5,4,3,23,65];
echo('max element of ');    print_r($arr1);   echo('is ' . MaxElem($arr1 , 5).'until 5\'element <br/>');
echo('max element of ');    print_r($arr1);   echo('is ' . MaxElem($arr1 , 7).'until 7\'element <br/>');
echo('max element of ');    print_r($arr1);   echo('is ' . MaxElem($arr1 , 3).'until 3\'element <br/>');
?>
