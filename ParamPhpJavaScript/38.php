<?php
/**
 * Write an integer function PosLast(S0, S) that searches for the last occurrence of a string S0 within a
 * string S and returns the order number of the first character of this occurrence. If the string S does not
 * contain occurrences of S0 then the function returns 0. Output return values of this function for five given
 * pairs of strings (S0, S).
 */

include'helper.php';
function PosLast($S0, $S, $K=0, $N=0){
    if(strpos($S0 , $S)) {
        echo strpos($S0 , $S).'<br/>';
    }
    if(strrpos($S0 , $S)) {
        echo strrpos($S0 , $S);
        $result = strrpos($S0 , $S);
    }
    return $result;

}

PosLast('a a a a, a fost odata fost ...' , 'fost');