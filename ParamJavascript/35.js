/**
 * Created by asus on 03.12.14.
 */
function InvStr($S, $K, $N ){
    if($K > $S.length){
        return '';
    }
    var $var ='';
    for(var $i = $S.length-1 ; $i>$K ;$i--){
        $var = $var+$S[$i];
    }

    return $var;
}
console.log(InvStr('gnrewuri gnsrk gjnrskgjn sejgn sdtkjgnfs ikgnsre' , 15 ));