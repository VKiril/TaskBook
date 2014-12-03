/**
 *Write a procedure RemoveX(A, N, X) that removes all elements equal an integer X
 * from an array A of N integers. The array A and its size N are input and output parameters.
 * Using this procedure, remove elements with given values XA, XB, XC from three given arrays
 * A, B, C of size NA, NB, NC respectively and output the new size and elements of each changed array.
 */
function  RemoveX($A, $N, $X){
    $N = $A.length;
    for($i = 0 ; $i < $N; $i++){
        if($A[$i] == $X){
            delete ($A[$i]);
        }
    }

    return $A;
}

$arr = [1,32,54,21,65,78,4,3,2,25,6,7,8,4,5,6,7,8,9];

console.log(RemoveX($arr , 10 , 1));