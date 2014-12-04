/**
 * Write a string function DecToHex(N) that returns a string containing the hexadecimal representation of a
 * nonnegative integer N. The string consists of characters "0"–"9", "A"–"F" and does not contain leading zeros
 * (except for the representation of zero number). Using this function, output hexadecimal representations of five
 * given integers.
 */

function DecToHex($N){
    if ($N < 0) {
        $N = 0xFFFFFFFF + $N + 1;
    }
    return parseInt($N, 10).toString(16);
}

console.log(DecToHex(65535));
console.log(DecToHex(255));
console.log(DecToHex(127));
