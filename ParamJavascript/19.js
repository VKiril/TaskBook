/**
 * Write a real-valued function Norm1(A, M, N) that computes the norm of an M × N matrix A of real numbers using the formula
 * Norm1(A, M, N) = max {|A1,J| + |A2,J| + … + |AM,J|},
 * where the maximum is being found over J = 1, …, N. Having input an M × N matrix A, output Norm1(A, K, N), K = 1, …, M.
 */

function Norm1($A, $M, $N){
    var $norm = 0 ;
    for($i = 0 ; $i< $N ; $i++){
        var $max = $A[$i][0];
        for($j = 0 ; $j <$M ; $j++){
            if($max < $A[$i][$j] ){
                $max = $A[$i][$j];
            }
            $norm += $max ;
        }
    }
    return $norm ;
}

$arr = [[2,3,45],[4,6,76],[3,2,1 ]];

console.log(Norm1($arr , 3,3));