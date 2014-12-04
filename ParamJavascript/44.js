/**
 * Created by asus on 03.12.14.
 */
/**
 * Write a string function DecToBin(N) that returns a string containing the binary representation of a
 * nonnegative integer N. The string consists of characters "0", "1" and does not contain leading zeros
 * (except for the representation of zero number). Using this function, output binary representations of
 * five given integers.
 */

function DecToBin($N){
    if ($N < 0) {
        $N = 0xFFFFFFFF + $N + 1;
    }
    return parseInt($N, 10).toString(2);
}

console.log( DecToBin(65535));
console.log( DecToBin(255) );
console.log( DecToBin(127) );
console.log( DecToBin(137) );