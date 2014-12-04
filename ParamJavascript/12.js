/**
 * Write a procedure SortIndex(A, N, I) that creates an index array I for an array A of N
 * real numbers. The index array contains order numbers of elements of array A so that they
 * correspond to array elements in ascending order of their values (the array A remains unchanged).
 * The index array I is an output parameter. Using this procedure, create index arrays for three
 * given arrays A, B, C of size NA, NB, NC respectively.
 */


function SortIndex($A, $N ){
    var $I = $A ;
    for($i = 0 ;$i < $A.length ; $i++ ){
        for($j = 0 ; $j < $A.length ; $j++) {
            if($A[$i] < $A[$j]){
               var $min = $I[$j];
                $I[$j] = $I[$i];
                $I[$i] =$min;
            }
        }
    }



    var temp = [];
    for ( key1 in $I){
        for(key2 in $A){
            if($I[key1] == $A[key2]){
                temp[key1] = key2;
            }
        }
    }

    return temp;


}





$arr = [1,3,2,4];


console.log(SortIndex($arr , 3));