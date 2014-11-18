<?php
/**
 * Created by PhpStorm.
 * User: asus
 * Date: 18.11.14
 * Time: 18:19
 */
include 'phpHelper.php';
?>
<script>
    function Power2($A, $N){
        var $AN = 0 ;
        if($N == 0 ){
            $AN = 1 ;
        }else if ($N > 0 ){
            $AN = Math.pow($A , $N);
        } else {
            $AN = Math.pow($A , Math.abs($N));
            $AN = 1 / $AN ;
        }
        return $AN ;
    }


    document.getElementById('body').innerHTML = 'base 3 and degree is 4 , and the result is : ' + Power2(3,4);
    document.getElementById('body1').innerHTML = 'base 3 and degree is -4 , and the result is : ' + Power2(3,(-4));


</script>