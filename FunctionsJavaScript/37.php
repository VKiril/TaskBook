<?php
/**
 * Write a real-valued function Power1(A, B) that returns
 * the power AB calculated by the formula AB = exp(B·ln(A))
 * (A and B are real-valued parameters). In the case of zero-valued
 * or negative parameter A the function returns 0. Having input real
 * numbers P, A, B, C and using this function, find the powers AP, BP, CP.
 */

include 'phpHelper.php';
?>
<script>
    function Power1(A, B){
        if(A <= 0){
            var AB = 0 ;
            return AB;
        }
        AB = Math.exp(B*Math.log(A));

        return Math.ceil(AB);
    }
    document.getElementById('body').innerHTML = 'numbers are  3,4 ' + ' and power is  '+ (Power1(3,4));
    document.getElementById('body2').innerHTML = 'numbers are  5,3 ' + ' and power is  '+ (Power1(5,3));
</script>