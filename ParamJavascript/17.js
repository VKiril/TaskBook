/**
 * Write a procedure ArrayToMatrCol(A, K, M, N, B) that copies elements of an array A of K
 * real numbers to an M × N matrix B (by columns). "Superfluous" array elements must be
 * ignored; if the size of the array is less than the amount of matrix elements then zero
 * value must be assigned to remaining matrix elements. Two-dimensional array B is an output
 * parameter. Having input an array A of size K, integers M, N and using this procedure,
 * create a matrix B and output its elements.
 */

function ArrayToMatrCol($M  , $N  , $B){
    var $K = $M*$N;
    var $iterator = -1 ;
    var $A=[];
    for(var $i = 0 ; $i < $K ; $i++){
        $A[$i] = 0

    }
    //console.log($A);
    //console.log($B);


    for($i = 0 ; $i <$M ; $i++){
        for (var $j  = 0 ;$j < $N ; $j ++){
            $iterator ++ ;

            $A[$iterator] = $B[$j][$i] ;


        }
    }
    return $A;
}

$arr =  [[1,2,3,4], [2,3,4,5], [2,3,12,3], [8,65,4,9]];

$b = [];
//ArrayToMatrCol(4,4,$arr);
console.log(ArrayToMatrCol(4,4,$arr));