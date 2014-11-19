function Power2($A, $N){
   // alert('pow2');
    var $AN = 0 ;
    if($N == 0 ){
        $AN = 1 ;
    }else if ($N > 0 ){
        $AN = Math.pow($A , $N);
    } else {
        $AN = Math.pow($A , Math.abs($N));
        $AN = 1 / $AN ;
    }
    return $AN.toFixed(3) ;
}

function Power1(A, B){
    //alert('pow1');
    if(A <= 0){
        var AB = 0 ;
        return AB;
    }
    AB = Math.exp(B*Math.log(A));

    return Math.ceil(AB);
}