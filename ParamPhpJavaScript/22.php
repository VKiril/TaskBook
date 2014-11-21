<?php
/**
 * Write a real-valued function SumCol(A, M, N, K) that returns the sum of elements in K-th column of an M × N
 * matrix A of real numbers (if K is out of the range 1 to N then the function returns 0). Output the return value
 * of SumCol(A, M, N, K) for a given M × N matrix A and three given integers K.
 */

include 'helper.php';
function SumCol($A, $M, $K){
    $sum = 0 ;
    for ($i = 0 ; $i < $M ; $i++){
        $sum += $A[$i][$K];
    }
    return $sum ;
}
$arr = array(
    [2,3,45],
    [4,6,76],
    [3,2,1 ],
);

echo SumCol($arr , 3 , 1);