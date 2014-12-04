/**
 * Write a procedure SortCols(A, M, N) that rearrange columns of an M × N matrix A of integers in ascending
 * lexicographic order (that is, for comparison of two columns their first distinct elements with the equal
 * order numbers must be compared). Two-dimensional array A is an input and output parameter. Using this procedure,
 * sort columns of a given M × N matrix A.
 */


function SortCols($a, $m, $n){

    for(var $i = 0 ; $i < $m ; $i++){
        for(var $j = 0 ; $j < $m ; $j++){
            if($a[0][$i] > $a[0][$j] ){
                for(var $k = 1 ; $k < $n ; $k++){
                    var $temp = $a[$i][$k];
                    $a[$i][$k] = $a[$j][$k];
                    $a[$j][$k] = $temp ;
                }
            }
        }
    }
}


$arr = [[2,3,45],[4,6,76],[3,2,1 ]];
console.log(SortCols($arr , 3,3));