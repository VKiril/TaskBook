/**
 * Write a real-valued function Norm2(A, M, N) that computes the norm of an M × N matrix A of real numbers using
 * the formula
 * Norm2(A, M, N) = max {|AI,1| + |AI,2| + … + |AI,N|},
 * where the maximum is being found over I = 1, …, M. Having input an M × N matrix A, output Norm2(A, K, N),
 * K = 1, …, M.
 */
function Norm2($A, $M, $N){
    var $norm = 0 ;
    for(var $i = 0 ; $i< $N ; $i++){
        var $max = $A[0][$i];
        for(var $j = 0 ; $j <$M ; $j++){
            if($max < $A[$j][$i] ){
                $max = $A[$j][$i];
            }
            $norm += $max ;
        }
    }
    return $norm ;
}

$arr = [[2,3,45],[4,6,76],[3,2,1 ]];

console.log(Norm2($arr , 3,3));