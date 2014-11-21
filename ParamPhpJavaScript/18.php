<?php
/**
 * Write a procedure Chessboard(M, N, A) that creates an M × N matrix A whose elements are
 * integers 0 and 1, which are arranged in "chessboard" order, and A1,1 = 0. Two-dimensional
 * array A is an output parameter. Having input integers M, N and using this procedure,
 * create an M × N matrix A.
 */
include'helper.php';

function Chessboard($M, $N, &$A){
    for($i = 0 ; $i < $M ; $i++){
        for($j = 0 ; $j < $N ; $j ++ ){
            $A[$i][$j]  = 0 ;
        }
    }



    for($i = 0 ; $i < $M ; $i++){
        if($i%2 ==0){
            for($j = 1 ; $j < $N ; $j +=2 ){
                $A[$i][$j] = 1 ;
            }
        } else {
            for($j = 0 ; $j < $N ; $j +=2 ){
                $A[$i][$j] = 1 ;
            }
        }
    }


}



$b = [];
$m = 6 ;
$n = 6 ;
Chessboard($n,$m,$b);
for($i = 0 ; $i < $m ; $i ++){
    for ($j = 0 ; $j < $n ; $j++){
        echo($b[$i][$j].'  ');
    }
    echo('<br/>');
}