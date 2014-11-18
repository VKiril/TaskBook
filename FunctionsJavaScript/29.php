<?php
/**
 * Write a function AddRightDigit(D, K) that adds a digit D to the right side of the
 * decimal representation of a positive integer K and returns the obtained number
 * (D and K are input integer parameters, the value of D is in the range 0 to 9).
 * Having input an integer K and two one-digit numbers D1, D2 and using two calls
 * of this function, sequentially add the given digits D1, D2 to the right side of
 * the given K and output the result of each adding.
 */

include 'phpHelper.php';
?>
<script>
    function AddRightDigit(D, K){
        var x = K.toString();
        x += D ;

        return x ;
    }

    document.getElementById('body').innerHTML = 'number is 2345, and append 2 to the number right side : ' + AddRightDigit(2 , 2345);
    document.getElementById('body1').innerHTML = 'number is 4345, and append 21 to the number right side : ' + AddRightDigit(21 , 4345);
    document.getElementById('body2').innerHTML = 'number is 23450, and append 121 to the number right side : ' + AddRightDigit(121 , 23450);
</script>