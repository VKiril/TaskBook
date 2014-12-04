/**
 * Write a procedure Chessboard(M, N, A) that creates an M × N matrix A whose elements are
 * integers 0 and 1, which are arranged in "chessboard" order, and A1,1 = 0. Two-dimensional
 * array A is an output parameter. Having input integers M, N and using this procedure,
 * create an M × N matrix A.
 */

function Chessboard($M, $N){
    var $A = [];

    for(var i=0; i < $M; i++){

        // Creates an empty line
        $A.push([]);

        // Adds cols to the empty line:
        $A[i].push( new Array($N));

        for(var j=0; j < $N; j++){
            // Initializes:
            $A[i][j] = 0;
        }
    }




    for(var $i = 0 ; $i < $M ; $i++){
        if($i%2 ==0){
            for($j = 1 ; $j < $N ; $j +=2 ){
                $A[$i][$j] = 1 ;
            }
        } else {
            for( var $j = 0 ; $j < $N ; $j +=2 ){
                $A[$i][$j] = 1 ;
            }
        }
    }
    return $A;


}

console.log(Chessboard(5,5));