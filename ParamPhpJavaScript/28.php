<?php
/**
 * Write a procedure RemoveRowCol(A, M, N, K, L) that removes K-th row and L-th column simultaneously
 * from an M × N matrix A of real numbers (integers K and L are assumed to satisfy the inequalities M > 1, N > 1).
 * If K > M or L > N then the matrix remains unchanged. Two-dimensional array A and integers M, N are input and
 * output parameters. Having input an M × N matrix A and two integers K, L, apply this procedure to the given
 * matrix and output a new order and elements of the resulting matrix.
 */

function removeRowCol(&$a, $m, $k, $l){
    unset($a[$k]);

    for($i = 0 ; $i < $m-1 ; $i ++){
    unset($a[$i][$l]);
    }
}

$arr = array(
    [1,2,3],
    [4,5,6],
    [7,8,9],
);
var_dump($arr);
removeRowCol($arr , 3,2,1);
var_dump($arr);