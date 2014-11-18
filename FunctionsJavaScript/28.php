<?php
/**
 * Write a function InvDigits(K) that inverts the order of digits of
 * a positive integer K and returns the obtained integer (K is an input parameter).
 * Using this function, invert the order of digits for each of five given integer.
 */
include 'phpHelper.php';
?>
<script>
    function InvDigits(K){
        var x = K.toString().length ;
        var y = K.toString() ;
        var inverse = '';
        for (var i = x ; i >= 0 ; i-- ){
            inverse += y.charAt(i);
        }
        return inverse ;
    }
    document.getElementById('body').innerHTML = 'original number 1234567 ' + ' inverted ' +  InvDigits(1234567);
    document.getElementById('body1').innerHTML ='original number 1698679865 ' + ' inverted ' + InvDigits(1698679865);
    document.getElementById('body2').innerHTML ='original number 264989548 ' + ' inverted ' + InvDigits(264989548);
    document.getElementById('body3').innerHTML ='original number 5555555588888888888 ' + ' inverted ' + InvDigits(5555555588888888);
</script>