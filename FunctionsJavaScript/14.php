<?php
/**
 * Write an integer function DigitCount(K) that returns the amount
 * of digits in the decimal representation of a positive integer K.
 * Using this function, find the amount of digits for each of five
 * given positive integers.
 */
?>
<div id="body"></div>
<div id="body1"></div>
<div id="body2"></div>
<script>
    function DigitCount(K){
        return K.toString().length;
    }
    var x = 13425;
    var x1 = 1342512456;
    var x2 = 223565489895522545;

    document.getElementById('body').innerHTML = 'the length of number ' + x + '<br/> is ' + DigitCount(x) ;
    document.getElementById('body1').innerHTML = 'the length of number ' + x1 + '<br/> is  ' + DigitCount(x1) ;
    document.getElementById('body2').innerHTML = 'the length of number ' + x2 + '<br/> is ' + DigitCount(x2) ;
</script>