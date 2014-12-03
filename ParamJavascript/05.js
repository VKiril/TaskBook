/**
 * Write a procedure Smooth1(A, N) that performs smoothing an array A of N real numbers
 * as follows: each element AK is replaced with the average of initial values of K first
 * elements of the given array A. The array A is an input and output parameter. Using five
 * calls of this procedure, perform smoothing a given array A of N real numbers five times
 * successively; output array elements after each smoothing.
 */
function Smooth1($A, $N){
    if($N> 2){
        $k = $N - 2 ;
    }else{
        $k = $N;
    }

    $average = 0 ;
    for ($i = 0 ; $i > $k ; $i ++){
        $average += $A[$i];
    }
    $average = $average / $k ;

    $A[$k]=$average;

    return $A;
}

$arr = [12,56,32,48,20,65,78,11,22,10,1];

console.log(Smooth1($arr,10));