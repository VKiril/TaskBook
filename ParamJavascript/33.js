/**
 * Write a procedure LowCaseLat(S) that converts all Latin capital letters of a string S to lowercase
 * (others characters of S must remain unchanged). A string S is an input and output parameter. Using this
 * procedure, process five given strings.
 */


function LowCaseLat($S) {
    $S = $S.toLowerCase();
    return $S;
}

var $var = 'ALDSNGBR JGNSDK JNGSKJGNH SKJGNWOEINHR D8KLJGNBTKLJXGN PSIJRHGTFD';
console.log(LowCaseLat($var));