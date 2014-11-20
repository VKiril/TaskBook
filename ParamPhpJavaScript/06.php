<?php
/**
 * Write a procedure Smooth2(A, N) that performs smoothing an array A of N real numbers as
 * follows: an element A1 remains unchanged; elements AK (K = 2, …, N) is replaced with the
 * average of initial values of elements AK−1 and AK. The array A is an input and output
 * parameter. Using five calls of this procedure, perform smoothing a given array A of N
 * real numbers five times successively; output array elements after each smoothing.
 */
include'helper.php';
function Smooth2(&$A, $N = 0){
    $N = sizeof($A);
    $average = 0;
    for ($i =1 ; $i < $N ; $i++){
        for($j = 0 ; $j < $i ; $j++ ){
            $average += $A[$j];
           /* echo('<br/>'.$average.'<br/>');*/
        }
        $average = $average/$i;
        //echo('<br/>'.$average.'<br/>');
        $A[$i] = ceil($average);
    }
}
echo('test 1<br/>');
$arr = [12,32,43,11,2,5,43,6,87,23,432];
print_r($arr);echo('<br/>');
Smooth2($arr );
print_r($arr);echo('<br/>');
echo('test 2<br/>');
$arr = [54,65,23,11,4,6,7,3,543,234,654,23,21,21,3,0];
print_r($arr);echo('<br/>');
Smooth2($arr );
print_r($arr);echo('<br/>');
?>