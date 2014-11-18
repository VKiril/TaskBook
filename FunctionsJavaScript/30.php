<?php
/**
 * Write a function AddLeftDigit(D, K) that adds a digit D to
 * the left side of the decimal representation of a positive integer
 * K and returns the obtained number (D and K are input integer parameters,
 * the value of D is in the range 0 to 9). Having input an integer K and two
 * one-digit numbers D1, D2 and using two calls of this function, sequentially
 * add the given digits D1, D2 to the left side of the given K and output the
 * result of each adding.
 */

include'phpHelper.php';
?>
<script>
    function AddLeftDigit(D, K){
        var x = K.toString();
        x = D + x ;

        return x;
    }
    document.getElementById('body').innerHTML = 'must to add the number 11 to the left side of number 300 : '+AddLeftDigit(11 , 300);
    document.getElementById('body1').innerHTML = 'must to add the number 121 to the left side of number 4300 : '+AddLeftDigit(121 , 4300);
    document.getElementById('body2').innerHTML = 'must to add the number 11 to the left side of number 10 : '+AddLeftDigit(11 , 10);
    document.getElementById('body3').innerHTML = 'must to add the number 161 to the left side of number 3050 : '+AddLeftDigit(161 , 3050);
</script>