/**
 * Write a procedure ArrayToMatrRow(A, K, M, N, B) that copies elements of an array A of K
 * real numbers to an M × N matrix B (by rows). "Superfluous" array elements must be ignored;
 * if the size of the array is less than the amount of matrix elements then zero value must be
 * assigned to remaining matrix elements. Two-dimensional array B is an output parameter. Having
 * input an array A of size K, integers M, N and using this procedure, create a matrix B and output
 * its elements.
 */

function ArrayToMatrRow($A, $M, $N){

    var $B = new Array($M);
    for (var i = 0; i < $M; i++) {
        $B[i] = new Array($N);
        console.log($B[i]);
    }


    var $K = $A.length;
    var $iterator = 0 ;
    for(var $i = 0 ; $i <$M ; $i++){
        for (var $j  = 0 ;$j < $N ; $j ++){
            $B[1][1] = 'a' ;
            console.log($B[i][$j]);
        }
    }

    for($i = 0 ; $i <$M ; $i++){
        for ($j  = 0 ;$j < $N ; $j ++){
            $B[[$i][$j]] = $A[$iterator] ;
            $iterator ++ ;
            if($iterator == $K){
                return 1;
            }
        }
    }

    return $B;


}

$arr = [1,2,3,4,5,6,7,5,4,3,3,45,6,78,8,67,5,4,4,3];
function matrix( rows, cols, A){

    var arr = [];
    var iterator = 0 ;

    for(var i=0; i < rows; i++){

        // Creates an empty line
        arr.push([]);

        // Adds cols to the empty line:
        arr[i].push( new Array(cols));

        for(var j=0; j < cols; j++){
            // Initializes:
            arr[i][j] = 0;
        }
    }
    // Creates all lines:
    for( i=0; i < rows; i++){
        for(j=0; j < cols; j++){
            // Initializes:
            arr[i][j] = A[iterator];
            iterator++;
            if(iterator >= A.length){
                arr[i][j] = 0;
            }
        }
    }

    return arr;
}
console.log(matrix(5,5,$arr));

//console.log(ArrayToMatrRow($arr , 4,4));