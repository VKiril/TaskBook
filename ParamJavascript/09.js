/**
 * Created by asus on 03.12.14.
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