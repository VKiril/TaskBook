/**
 * Created by asus on 03.12.14.
 */

function Smooth3($A, $N){
    $copy = $A ;
    $N = $A.length;
    $average = 0 ;
    for($i = 1 ; $i < $N-1 ; $i ++){
        $average = $A [$i-1] + $A[$i+1];
        $average = Math.ceil($average/2);
        $copy[$i]=$average;
        //echo($copy[$i].'<br/>');
    }
    $int = 0 ;
    for($element in $copy){

        $A[$int] = $copy[$element];
        //echo('element'.$element.'<br/>');
        $int ++;
    }

    return $A;
}

$arr = [21,43,54,2,5,65,1,8,7,5,0,4,1];

console.log(Smooth3($arr , 10));