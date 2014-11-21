<?php
/**
 * Write a procedure RemoveRows(A, M, N, K1, K2) that removes rows with the order numbers in the
 * range K1 to K2 from an M × N matrix A of real numbers (integers K1 and K2 are assumed to satisfy
 * the double inequality 1 < K1 ≤ K2). If K1 > M then the matrix remains unchanged, if K2 > M then
 * rows with numbers from K1 to M must be removed. Two-dimensional array A and integers M, N are input
 * and output parameters. Having input an M × N matrix A and two integers K1, K2 and using this procedure,
 * remove rows with the order numbers in the range K1 to K2 from the given matrix and output a new order and
 * elements of the resulting matrix.
 */
include'helper.php';
function RemoveRows(&$A, $M, $N, $K1, $K2){
    if($K1 < $M){
        if($K2 > $M){
            $K2 =$M;
        }
        for($i = $K1 ;$i < $K2 ; $i ++){

            
            unset($A[$i]);

        }
    }

}
$arr = array(
    [1,2,3],
    [4,5,6],
    [7,8,9],
);
var_dump($arr);
RemoveRows($arr , 3,3,1,2);
var_dump($arr);