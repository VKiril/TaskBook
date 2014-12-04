/**
 * Write a string function WordK(S, K) that returns K-th word of a string S (a word is defined as a character
 * sequence that does not contain blank characters and is bounded by blank characters or the string beginning/end).
 * If the amount of words in the string S is less than K then the function returns an empty string. Having input a
 * string S and three positive integers K1, K2, K3 and using this function, extract words with the given order numbers
 * from the given string.
 */


function WordK($S, $K){
    var $arr = $S.split([' ']);

    return $arr[$K]; // will print Test
}
console.log(WordK('sdkfljbv wstbvjktvbsv dsvbsb twsbvf dbst wbt retb rtbg trs beyr nbyter nbrenb yt' , 1));