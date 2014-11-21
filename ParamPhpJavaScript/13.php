<?php
/**
 *  Write a procedure Hill(A, N) that changes order of elements of an array A of N real
 * numbers as follows: the minimal element of the array must be the first one, an element,
 * whose value is the next to minimal value, must be the last one, an element with the next
 * value must be the second one, and so on (as a result, the diagram of values of the array
 * elements will be similar to a hill). The array A is an input and output parameter. Using
 * this procedure, change three given arrays A, B, C of size NA, NB, NC respectively.
 */
include 'helper.php';

function Hill(&$A, $N =0  ){
    $N = sizeof($A);
    for($i = 0 ;$i < $N ; $i++ ){
        for($j = 0 ; $j < $N ; $j++) {
            if($A[$i] < $A[$j]){
                $min = $A[$j];
                $A[$j] = $A[$i];
                $A[$i] =$min;
            }
        }
    }
    $hill1 = [] ;
    $iterator = 0 ;
    $N = sizeof($A);
    if( $N%2 == 0 ){
        for ($i = 0 ;$i < $N ; $i+=2){
            $hill1[$iterator] = $A[$i];
            $iterator++ ;
        }
        for ($i = $N-1 ;$i > 0 ; $i-=2){

            $hill1[$iterator] = $A[$i];

            $iterator++ ;
        }
    } else {
        for ($i = 0 ;$i < $N ; $i+=2){
            $hill1[$iterator] = $A[$i];
            $iterator++ ;
        }
        for ($i = $N-2 ;$i > 0 ; $i-=2){

            $hill1[$iterator] = $A[$i];

            $iterator++ ;
        }
    }

    $A = $hill1;
}

$arr = [7,6,5,4,3,2,1];
print_r($arr);echo('<br/>');
Hill($arr);
print_r($arr);
