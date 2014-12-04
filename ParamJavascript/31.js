/**
 * Write a string function FillStr(S, N) that returns a string of length N containing repeating
 * copies of the template string S (the last copy of S may be contained partially in the resulting string).
 * Having input an integer N and five template strings and using this function, create five resulting strings
 * of length N.
 */
function FillStr($S, $N){
    var $var = '' ;
    for (var $i = 0 ; $i < $N ; $i++ ){
        $var  = $var+$S;
    }
    return $var ;
}
console.log((FillStr('Hello ' , 6)));