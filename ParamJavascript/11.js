/**
 * Write a procedure SortArray(A, N) that sorts an array A of N real numbers in ascending order.
 * The array A is an input and output parameter. Using this procedure, sort three given arrays
 * A, B, C of size NA, NB, NC respectively.
 */
function SortArray($A, $N){
    $N = $A.length;
    $min = 0;
    for($i = 0 ;$i < $N ; $i++ ){
        for($j = 0 ; $j < $N ; $j++) {
            if($A[$i] < $A[$j]){
                $min = $A[$j];
                $A[$j] = $A[$i];
                $A[$i] =$min;
            }
        }
    }
    return $A;
}



$arr = [9,8,7,6,5,4,3,2,1];
console.log(SortArray($arr , 10));