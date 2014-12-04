/**
 * Write a real-valued function SumCol(A, M, N, K) that returns the sum of elements in K-th column of an M × N
 * matrix A of real numbers (if K is out of the range 1 to N then the function returns 0). Output the return value
 * of SumCol(A, M, N, K) for a given M × N matrix A and three given integers K.
 */
function SumCol($A, $M, $K){
    var $sum = 0 ;
    for (var $i = 0 ; $i < $M ; $i++){
        $sum += $A[$i][$K];
    }
    return $sum ;
}
$arr = [[2,3,45],[4,6,76],[3,2,1 ]];

console.log(SumCol($arr , 3 , 1));