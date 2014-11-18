<?php
/*
 * Write a real-valued function Fact2(N) that returns a double factorial N!!:
 * N!! = 1·3·5·…·N,    if N is an odd number;
 * N!! = 2·4·6·…·N    otherwise
 * (N is a positive integer; the real return type allows to avoid the
 * integer overflow during the calculation of the double factorials for
 * large values of N). Using this function, find the double factorials of
 * five given integers.
 * */
include 'phpHelper.php';
?>
<script>
    function Fact2(n){
        var result = 0 ;
        if(n % 2 == 0){
            result = func(n);
            result  = 'even  '+ result;
        } else {
            result = func(n);
            result = 'odd &nbsp; '+result;
        }

        return result ;
    }

    function func(n){
        var factorial = 1 ;
        for(i = n ; i > 0 ; i-=2){
            factorial = factorial* i;
        }
        return factorial;
    }

    document.getElementById('body').innerHTML = 'double factorial of 12 is ' + Fact2(12);
    document.getElementById('body1').innerHTML = 'double factorial of 11 is ' + Fact2(11);
    document.getElementById('body2').innerHTML = 'double factorial of 7 is ' + Fact2(7);
    document.getElementById('body3').innerHTML = 'double factorial of 7 is ' + Fact2(6);
</script>