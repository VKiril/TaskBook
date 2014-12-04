/**
 * Write a procedure RemoveRowCol(A, M, N, K, L) that removes K-th row and L-th column simultaneously
 * from an M × N matrix A of real numbers (integers K and L are assumed to satisfy the inequalities M > 1, N > 1).
 * If K > M or L > N then the matrix remains unchanged. Two-dimensional array A and integers M, N are input and
 * output parameters. Having input an M × N matrix A and two integers K, L, apply this procedure to the given
 * matrix and output a new order and elements of the resulting matrix.
 */

function removeRowCol($a, $m, $k, $l){
    delete $a[$k];

    for(var $i = 0 ; $i < $m-1 ; $i ++){
        delete $a[$i][$l];
    }

    return $a ;
}

$arr = [[2,3,45],[4,6,76],[3,2,1 ]];
console.log(removeRowCol($arr , 3,2,1));