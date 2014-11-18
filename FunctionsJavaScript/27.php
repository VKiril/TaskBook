<?php
/**
 * Write a function DigitCS(K) that finds and returns the amount C
 * of digits in the decimal representation of a positive integer K
 * and also the sum S of its digits (K is an input integer parameter).
 * Using this function, find the amount and the sum of digits for each
 * of five given integers.
 */

include 'phpHelper.php';
?>
<script>
    function DigitCS(K){
        var x = K.toString().length ;
        console.log(x);
        var y = K.toString() ;
        console.log(y);
        var sum = 0 ;
        for( var i = 0 ; i <= x ; i++ ){
            var n = y.charAt(i);
            sum += + n ;//i don't know why it work only in this case (without + n) it output a simple string
            console.log(sum);
        }
        var result = new Array(x , sum);
        console.log(result);

        return result ;
    }
    var d1 = DigitCS(123456789);
    var d2 = DigitCS(456789);
    document.getElementById('body').innerHTML = 'the amount of 123456789 is ' + d1[0] + ' and the length is ' + d1[1];
    document.getElementById('body1').innerHTML = 'the amount of 456789 is '   + d2[0] + ' and the length is ' + d2[1];

</script>