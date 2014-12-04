/**
 * Write a procedure Transp(A, M) that transposes a real-valued square matrix A of order M
 * (that is, reflects its elements about the main diagonal). The matrix A is an input and output parameter.
 * Using this procedure, transpose the given matrix A of order M.
 */

function Transp($A, $M){
    var $temp = $A ;
    for(var $i = 0 ; $i<$M ; $i++){
        for (var $j = 0 ; $j < $M ; $j ++){
            $temp[$i][$j] = $A[$j][$i];
        }
    }
    return $temp ;
}


$arr = [[2,3,45],[4,6,76],[3,2,1 ]];
console.log(Transp($arr , 3));