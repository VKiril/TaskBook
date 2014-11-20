<?php
/**
 * Write a function IncTime(H, M, S, T) that increases a time interval
 * in hours H, minutes M, seconds S on T seconds and returns new values
 * of hours, minutes, and seconds (all numbers are positive integers).
 * Having input hours H, minutes M, seconds S (as integers) and an
 * integer T and using the IncTime function, increase the given time
 * interval on T seconds and output new values of H, M, S.
 */
include 'phpHelper.php';
?>
<script>
    function IncTime(H, M, S){

        return (H * 60 * 60 + M * 60 + S);
    }

    document.getElementById('body').innerHTML = '5 hours 30 minutes and 5 seconds is : ' + IncTime(5,30,5) + ' seconds';
    document.getElementById('body1').innerHTML = '6 hours 30 minutes and 0 seconds is : ' + IncTime(6,30,0) + ' seconds';
</script>
