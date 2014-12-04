/**
 * Write a procedure SplitStr(S, W, N) that creates an array W of all words being contained in a string S.
 * The array W of strings and its size N are output parameters. A word is defined as a character sequence that
 * does not contain blank characters and is bounded by blank characters or the string beginning/end; the string
 * S is assumed to contain no more than 10 words. Using this function, output the amount N of words in the given
 * string S and also all these words.
 */

function SplitStr($S){

    var $W = $S.trim().split([' ']);
    var $N = $W.length;
    return $N;

}


console.log(SplitStr('fdagv sardgr dsgvb rdg rag bsd frgbr dsbfd bzrt sbrsdbgr easw' ));
