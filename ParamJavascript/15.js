/**
 * Write a procedure Split2(A, NA, B, NB, C, NC) that copies elements of an array A of
 * NA integers to arrays B and C so that the array B contains all elements whose values
 * are even numbers and the array C contains all elements whose values are odd numbers
 * (in the same order). The arrays B, C and their sizes NB, NC are output parameters.
 * Apply this procedure to a given array A of size NA and output the size and the elements
 * for each of the resulting arrays B and C.
 */


function Split2($A ){
    var $B =[]; var  $C = [];
    var $NA = $A.length;
    var $intB = 0 ;
    var $intC = 0 ;
    for (var $i = 0 ; $i < $NA ; $i ++ ){
        if($A[$i] %2 == 0){
            $B[$intB] = $A[$i];
            $intB++;
        } else {
            $C[$intC] = $A[$i];
            $intC++;
        }
    }
    var result = [$B, $C];
    return result ;
}

$arr = [1,2,3,4,5,6,7,43,3,23,4,54,32,454,324,54,32,5443,2];
console.log(Split2($arr));