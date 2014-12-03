/**
 * Write a procedure RemoveForInc(A, N) that removes some elements from an array A of N real numbers
 * so that the values of elements being remained were in ascending order: the first element remains
 * unchanged, the second element must be removed if its value is less than the value of the first one,
 * the third element must be removed if its value is less than the value of the previous element being
 * remained, and so on. For instance, the array of elements 5.5, 2.5, 4.6, 7.2, 5.8, 9.4 must be changed
 * to 5.5, 7.2, 9.4. All procedure parameters are input and output ones. Using this procedure, change
 * three given arrays A, B, C whose sizes are NA, NB, NC respectively and output the new size and
 * elements of each changed array.
 */

function RemoveForInc($A, $N  ){
    $N = $A.length;
    //cho($N.'<br/>');
    $temp = $A[0] ;
    for($i = 1 ; $i< $N ; $i++){
        if($A[$i]  < $temp){
            // echo($A[$i]."<br/>");
            delete ($A[$i]);
        } else {
            $temp = $A[$i];
        }
    }
    $N =$A.length ;
    var result =  [$A , $N];
    return result;

}

$arr = [12,23,24,54,21,3,4,12,124,456,457,345,457];
var a = RemoveForInc($arr , 10) ;
console.log(a[0] );
console.log(a[1] );