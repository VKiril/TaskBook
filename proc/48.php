<?php
/**
 * Taking into account that the least common multiple of two positive
 * integers A and B equals A·(B/GCD(A, B)), where GCD(A, B) is the greatest
 * common divisor of A and B, and using the GCD2 function from the task Proc46,
 * write an integer function LCM2(A, B) that returns the least common multiple
 * of A and B. Using this function, find the least common multiple for each of
 * pairs (A, B), (A, C), (A, D) provided that integers A, B, C, D are given.
 */

echo('<div style="display: none;">');
include'47.php';
echo('</div> <br/>');

function LCM2($A, $B){
    $result = GCD2($A , $B);
    if($result['status'] == 'have divisor'){
        $response = $A*($B / $result['divisor']);
    } else {
        $response = 'don\'t have any common multiple';
    }


    return $response ;
}

echo('the least common multiple of 32 and 34 is :'.(LCM2(32,34)).'<br/>');

