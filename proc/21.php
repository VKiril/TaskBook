<?php
/**
 * Write an integer function SumRange(A, B) that returns a
 * sum of all integers in the range A to B inclusively (A and
 * B are integers). In the case of A > B the function returns 0.
 * Using this function, find a sum of all integers in the range A to
 * B and in the range B to C provided that integers A, B, C are given.
 */

function SumRange($A, $B){
    if($A > $B){
        return 0;
    } else {
        $sum = 0 ;
        for($i = $A ; $i<=$B ; $i ++){
            $sum += $i ;
        }
        return $sum ;
    }
}
echo " amount is : ".(SumRange(0 , 100)).'<br/>';