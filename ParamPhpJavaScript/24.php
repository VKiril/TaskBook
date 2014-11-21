<?php
/**
 * Write a procedure SwapCol(A, M, N, K1, K2) that exchanges K1-th and K2-th column of an M × N
 * matrix A of real numbers. The matrix A is an input and output parameter; if K1 or K2 are out
 * of the range 1 to N then the matrix remains unchanged. Having input an M × N matrix A and two
 * integers K1, K2 and using this procedure, exchange K1-th and K2-th column of the matrix A.
 */
function SwapCol(&$a, $k1, $k2){
    $temp = 0;
    foreach($a as $key => $row) {
        $temp = $a[$key][$k1];
        $a[$key][$k1] = $a[$key][$k2];
        $a[$key][$k2] = $temp;
    }
}

$arr = array(
    [2,3,45],
    [4,6,76],
    [3,2,1 ],
);

var_dump($arr);
SwapCol($arr, 0, 1);
var_dump($arr);