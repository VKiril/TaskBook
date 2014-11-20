<?php
/**
 * Write a procedure SortIndex(A, N, I) that creates an index array I for an array A of N
 * real numbers. The index array contains order numbers of elements of array A so that they
 * correspond to array elements in ascending order of their values (the array A remains unchanged).
 * The index array I is an output parameter. Using this procedure, create index arrays for three
 * given arrays A, B, C of size NA, NB, NC respectively.
 */

include'helper.php';
function SortIndex($A, $N = 0 , &$I){
    $I = $A ;
    for($i = 0 ;$i < sizeof($A) ; $i++ ){
        for($j = 0 ; $j < sizeof($A) ; $j++) {
            if($A[$i] < $A[$j]){
                $min = $I[$j];
                $I[$j] = $I[$i];
                $I[$i] =$min;
            }
        }
    }

    for ($a = 0 ; $a < sizeof($A) ; $a++){
        $I[$a] = array_search($I[$a],$A);
    }
}
$arr = [3,2,1];
$i = [];
SortIndex($arr ,0 , $i );
print_r($i);