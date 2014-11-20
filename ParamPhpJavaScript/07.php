<?php
/**
 * Write a procedure Smooth3(A, N) that performs smoothing an array A of N
 * real numbers as follows: each array element is replaced with the average
 * of initial values of this element and its neighbors. The array A is an input
 * and output parameter. Using five calls of this procedure, perform smoothing a
 * given array A of N real numbers five times successively; output array elements
 * after each smoothing.
 */

include 'helper.php';


function Smooth3(&$A, $N=0){
    $copy = $A ;
    $N = sizeof($A);
    $average = 0 ;
    for($i = 1 ; $i < $N-1 ; $i ++){
        $average = $A [$i-1] + $A[$i+1];
        $average = ceil($average/2);
        $copy[$i]=$average;
        //echo($copy[$i].'<br/>');
    }
    $int = 0 ;
    foreach($copy as $element){

        $A[$int] = $element;
        //echo('element'.$element.'<br/>');
        $int ++;
    }
}

$arr = [21,43,54,2,5,65,1,8,7,5,0,4,1];
print_r($arr);echo('<br/>');
Smooth3($arr);
print_r($arr);echo('<br/>');
echo('<br/>');
//var_dump($arr);