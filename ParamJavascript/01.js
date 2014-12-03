/**
 * Created by asus on 03.12.14.
 */


function MinElem($A , $N ){
    $min = $A[0];
    for($i = 0 ; $i < $N ; $i ++){
        if($min >$A[$i]){
            $min = $A[$i] ;
        }
    }
    return $min ;
}


$arr1 =  [10,2,4,3,6,1,98,5,4,3,23,65];
console.log(MinElem($arr1 , 14));