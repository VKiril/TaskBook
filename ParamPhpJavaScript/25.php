<?php
/**
 * Write a procedure Transp(A, M) that transposes a real-valued square matrix A of order M
 * (that is, reflects its elements about the main diagonal). The matrix A is an input and output parameter.
 * Using this procedure, transpose the given matrix A of order M.
 */

function Transp(&$A, $M){
    $temp = $A ;
    /*foreach($temp as $key1 => $val1){
        foreach($val1 as $key2 => $val2){
            $A[$key1] = $temp[$key2];
        }
    }*/
    for($i = 0 ; $i<$M ; $i++){
        for ($j = 0 ; $j < $M ; $j ++){
            $temp[$i][$j] = $A[$j][$i];
        }
    }
    $A = $temp ;
}

$arr = array(
    [1,2,3],
    [4,5,6],
    [7,8,9],
);
var_dump($arr);
Transp($arr , 3);
var_dump($arr);
