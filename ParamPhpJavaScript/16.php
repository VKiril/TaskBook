<?php
/**
 * Write a procedure ArrayToMatrRow(A, K, M, N, B) that copies elements of an array A of K
 * real numbers to an M × N matrix B (by rows). "Superfluous" array elements must be ignored;
 * if the size of the array is less than the amount of matrix elements then zero value must be
 * assigned to remaining matrix elements. Two-dimensional array B is an output parameter. Having
 * input an array A of size K, integers M, N and using this procedure, create a matrix B and output
 * its elements.
 */

include 'helper.php';
function ArrayToMatrRow($A, $K=0, $M, $N, &$B){
    $K = sizeof($A);
    $iterator = 0 ;
    for($i = 0 ; $i <$M ; $i++){
        for ($j  = 0 ;$j < $N ; $j ++){
            $B[$i][$j] = 0 ;
        }
    }

    for($i = 0 ; $i <$M ; $i++){
        for ($j  = 0 ;$j < $N ; $j ++){
            $B[$i][$j] = $A[$iterator] ;
            $iterator ++ ;
            if($iterator == $K){
                return 1;
            }
        }
    }


}

$arr = [1,2,3,4,5,6,7,5,4,3,3,45,6,78,8,67,5,4,4,3];
print_r($arr);echo('<br/>');
$b = array([],[]);$m = 7 ; $n = 7 ;
ArrayToMatrRow($arr , 0 ,$m ,$n , $b);
for($i = 0 ; $i < $m ; $i ++){
    for ($j = 0 ; $j < $n ; $j++){
        echo($b[$i][$j].'  ');
    }
    echo('<br/>');
}