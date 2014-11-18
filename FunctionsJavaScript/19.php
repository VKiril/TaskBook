<?php
include 'phpHelper.php';
/*
 * Write a real-valued function Fact(N) that returns a factorial
 * of a positive integer N: N! = 1·2·…·N (the real return type
 * allows to avoid the integer overflow during the calculation
 * of the factorials for large values of the parameter N).
 * Using this function, find the factorials of five given integers.*/
?>
<script>
    function Fact(n){
        return n?n*Fact(n-1):1;
    }

    document.getElementById('body').innerHTML = 'factorial of 10 is ' + Fact(10);
    document.getElementById('body1').innerHTML = 'factorial of 5 is ' + Fact(5);
    document.getElementById('body2').innerHTML = 'factorial of 3 is ' + Fact(3);

</script>