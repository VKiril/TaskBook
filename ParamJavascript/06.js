/**
 * Write a procedure Smooth2(A, N) that performs smoothing an array A of N real numbers as
 * follows: an element A1 remains unchanged; elements AK (K = 2, …, N) is replaced with the
 * average of initial values of elements AK−1 and AK. The array A is an input and output
 * parameter. Using five calls of this procedure, perform smoothing a given array A of N
 * real numbers five times successively; output array elements after each smoothing.
 */
function Smooth2($A, $N ){
    $N = $A.length;
    $average = 0;
    for ($i =1 ; $i < $N ; $i++){
        for($j = 0 ; $j < $i ; $j++ ){
            $average += $A[$j];
            /* echo('<br/>'.$average.'<br/>');*/
        }
        $average = $average/$i;
        //echo('<br/>'.$average.'<br/>');
        $A[$i] = Math.ceil($average);
    }

    return $A;
}
$arr = [12,32,43,11,2,5,43,6,87,23,432];
console.log(Smooth2($arr ,10));