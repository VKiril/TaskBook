<?php
/**
 * Write a function Mean(X, Y) that computes the arithmetical mean (X+Y)/2
 * and the geometrical mean (X·Y)1/2 of two positive real numbers X and Y
 * and returns the result as two real numbers (X and Y are input parameters).
 * Using this function, find the arithmetical mean and the geometrical mean
 * of pairs (A, B), (A, C), (A, D) provided that real numbers A, B, C, D are given.
 */
include 'phpHelper.php';
?>
<script>
    function Mean(X, Y){
        var ar  = (X + Y) / 2 ;
        var geo = (X * Y) / 2 ;
        var result = new Array( ar , geo);
        return result ;
    }
    var a = Mean(10 , 20);
    var b = Mean(15 , 30);
    document.getElementById('body').innerHTML = 'arithmetical mean of 10 and 20 is ' + a[0] + ', geometrical mean is '+a[1];
    document.getElementById('body1').innerHTML = 'arithmetical mean of 15 and 30 is ' + b[0] + ', geometrical mean is '+b[1];
</script>