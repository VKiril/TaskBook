<?php
/**
 * Write an integer function PosK(S0, S, K) that searches for K-th occurrence (K > 0) of a string S0 within a
 * string S and returns the order number of the first character of this occurrence. The string S is assumed to
 * contain no overlapping occurrences of the substring S0. If the string S does not contain occurrences of S0 then
 * the function returns 0. Output return values of this function for five given triples (S0, S, K).
 */
include'helper.php';
function PosK($S0, $S, $K){
    $var = '';
    for($i=$K; $i<strlen($S) ; $i++){
        $var = $var.$S[$i];
    }

    if(strpos($S0 , $var)) {
        echo strpos($S0 , $var);
    }
}
PosK('a a a a, a fost odata fost ...' , 'fost' , 1);