<?php
/**
 * Write a procedure SwapRow(A, M, N, K1, K2) that exchanges K1-th and K2-th row of an M × N matrix A of real
 * numbers. The matrix A is an input and output parameter; if K1 or K2 are out of the range 1 to M then the matrix
 * remains unchanged. Having input an M × N matrix A and two integers K1, K2 and using this procedure, exchange
 * K1-th and K2-th row of the matrix A.
 */

function SwapRow(&$A, $K1, $K2){
    $temp = $A[$K1];
    $A[$K1] = $A[$K2];
    $A[$K2] = $temp;
}

$arr = array(
    [2,3,45],
    [4,6,76],
    [3,2,1 ],
);

var_dump($arr);
SwapRow($arr, 0, 1);
var_dump($arr);