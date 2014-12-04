/**
 * Write an integer function PosLast(S0, S) that searches for the last occurrence of a string S0 within a
 * string S and returns the order number of the first character of this occurrence. If the string S does not
 * contain occurrences of S0 then the function returns 0. Output return values of this function for five given
 * pairs of strings (S0, S).
 */

function PosLast($S0, $S, $K, $N){
    if($S0.indexOf($S)) {
        var a = $S0.indexOf($S);
    }
    if($S0.indexOf($S)) {
        var b = $S0.lastIndexOf($S);
    }
    var result = [a,b];
    return result;

}

console.log(PosLast('a a a a, a fost odata fost ...' , 'fost'));