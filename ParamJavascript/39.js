/**
 * Write an integer function PosK(S0, S, K) that searches for K-th occurrence (K > 0) of a string S0 within a
 * string S and returns the order number of the first character of this occurrence. The string S is assumed to
 * contain no overlapping occurrences of the substring S0. If the string S does not contain occurrences of S0 then
 * the function returns 0. Output return values of this function for five given triples (S0, S, K).
 */

function PosK($S0, $S, $K){
    var $var = '';
    for(var $i=$K; $i<$S.length ; $i++){
        $var = $var+$S[$i];
    }

    if($S0.indexOf( $var)) {
        return $S0.indexOf( $var);
    }
}


console.log(PosK('a a a a, a fost odata fost ...' , 'fost' , 1));