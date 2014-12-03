/**
 * Created by asus on 03.12.14.
 */
function Inv($A, $N){
    $len = $A.length;
    //echo $len;
    $inverse = [];
    $inc =$len-1 ;
    $i = [];
    for($element in $A){
        $i[$inc] = $element;
        $inc --;

    }
    $A = [];
    $A = $i;
    return $A;
}

$arr = [2,3,5,1,54,23,21];

console.log(Inv($arr , 1));