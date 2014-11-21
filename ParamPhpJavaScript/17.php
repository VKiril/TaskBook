<?php
/**
 * Write a procedure ArrayToMatrCol(A, K, M, N, B) that copies elements of an array A of K
 * real numbers to an M × N matrix B (by columns). "Superfluous" array elements must be
 * ignored; if the size of the array is less than the amount of matrix elements then zero
 * value must be assigned to remaining matrix elements. Two-dimensional array B is an output
 * parameter. Having input an array A of size K, integers M, N and using this procedure,
 * create a matrix B and output its elements.
 */
include 'helper.php';
function ArrayToMatrCol(&$A, $K=0, $M  , $N  , $B){
    $K = $M*$N;
    $iterator = -1 ;
    for($i = 0 ; $i < $K ; $i++){
        $A[$i] = 0 ;
    }

    for($i = 0 ; $i <$M ; $i++){
        for ($j  = 0 ;$j < $N ; $j ++){
            $iterator ++ ;

            $A[$iterator] = $B[$j][$i] ;

            echo($iterator.'<br/>');
            //print_r($A);

        }//echo($iterator.' gfragr <br/>');
        //die;
    }
}

$arr = array(
    [1,2,3,4],
    [2,3,4,5],
    [2,3,12,3],
    [8,65,4,9],
);
$b = [];
ArrayToMatrCol($b , 0,4,4,$arr);

print_r($b);
