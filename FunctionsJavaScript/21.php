<?php
/**
 * Write an integer function Fib(N) that returns the value of N-th term of the
 * sequence of the Fibonacci numbers. The Fibonacci numbers FK are defined as follows:
 * F1 = 1,        F2 = 1,        FK = FK−2 + FK−1,    K = 3, 4, … .
 * Using this function, find five Fibonacci numbers with given order numbers N1, N2, …, N5.
 */
include 'phpHelper.php';
?>
<script>
    function Fib(N){
        var x = 0 ;
        var y = 1 ;
        var z = 0 ;

        while(z < N) {

            z = x + y;
            document.getElementById('body').innerHTML = 'this is the last one the rest is in console logs ' + z + "<br />";
            console.log(z);
            x = y;
            y = z;
        }
    }
    Fib(20);
    console.log('the next function');
    Fib(50);

</script>
