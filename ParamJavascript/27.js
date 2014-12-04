/**
 * Write a procedure RemoveCols(A, M, N, K1, K2) that removes columns with the order numbers in the range K1 to K2
 * from an M × N matrix A of real numbers (integers K1 and K2 are assumed to satisfy the double inequality 1 < K1 ≤ K2).
 * If K1 > N then the matrix remains unchanged, if K2 > N then rows with numbers from K1 to N must be removed.
 * Two-dimensional array A and integers M, N are input and output parameters. Having input an M × N matrix A
 * and two integers K1, K2 and using this procedure, remove columns with the order numbers in the range K1 to K2
 * from the given matrix and output a new order and elements of the resulting matrix.
 */

function RemoveCols($A, $M, $N, $K1, $K2){

    for(var $i = 0 ; $i < $M ; $i ++){
        for(var $j = $K1 ; $j < $K2 ; $j++){
            delete $A[$i][$j];
        }

    }
}

$arr = [[2,3,45],[4,6,76],[3,2,1 ]];
console.log(RemoveCols($arr , 3,3,1,2));