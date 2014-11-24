<?php
/**
 * Write a procedure SortCols(A, M, N) that rearrange columns of an M × N matrix A of integers in ascending
 * lexicographic order (that is, for comparison of two columns their first distinct elements with the equal
 * order numbers must be compared). Two-dimensional array A is an input and output parameter. Using this procedure,
 * sort columns of a given M × N matrix A.
 */
include'helper.php';
function SortCols(&$a, $m, $n){

    for($i = 0 ; $i < $m ; $i++){
        for($j = 0 ; $j < $m ; $j++){
            if($a[0][$i] > $a[0][$j] ){
                for($k = 1 ; $k < $n ; $k++){
                    $temp = $a[$i][$k];
                    $a[$i][$k] = $a[$j][$k];
                    $a[$j][$k] = $temp ;
                }
            }
        }
    }
}

$arr = array(
    [3,2,1],
    [4,5,6],
    [7,8,9],
);
var_dump($arr);
SortCols($arr , 3,3);
var_dump($arr);