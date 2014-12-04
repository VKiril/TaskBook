/**
 * Write a real-valued function SumRow(A, M, N, K) that returns the sum of elements in K-th row
 * of an M × N matrix A of real numbers (if K is out of the range 1 to M then the function returns 0).
 * Output the return value of SumRow(A, M, N, K) for a given M × N matrix A and three given integers K.
 */
function SumRow($A, $M, $K){
    var $sum = 0 ;
    for ( var $i = 0 ; $i < $M ; $i++){
        $sum += $A[$K][$i];
    }
    return $sum ;
}

$arr = [[2,3,45],[4,6,76],[3,2,1 ]];

console.log(SumRow($arr , 3 , 1));