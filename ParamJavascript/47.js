/**
 * Write an integer function HexToDec(S) that returns a nonnegative integer whose hexadecimal representation
 * is contained in a string parameter S. The parameter S consists of characters "0"–"9", "A"–"F" and does not
 * contain leading zeros (except for the representation of zero number). Using this function, output five integers
 * whose hexadecimal representations are given.
 */

function HexToDec($N){
    $N = ($N + '')
        .replace(/[^a-f0-9]/gi, '');
    return parseInt($N, 16);
}

console.log(HexToDec('ffff'));
console.log(HexToDec('ff'));
console.log(HexToDec('f'));
console.log(HexToDec('acbd'));