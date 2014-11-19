<?php
/**
 * Using the Power1 and Power2 functions (see Func37 and Func38),
 * write a real-valued function Power3(A, B) that returns the power
 * AB calculated as follows (A and B are real-valued parameters):
 * if B has a zero-valued fractional part then the function Power2(A, N)
 * is called (an integer variable N is equal to B), otherwise the function
 * Power1(A, B) is called. Having input real numbers P, A, B, C and using
 * the Power3 function, find the powers AP, BP, CP.
 */
include 'phpHelper.php';


echo('<script src="38-37.js"></script>');
?>


<script  >
    function Power3($A, $B){
        console.log('inside function');
        var $result = 0 ;
        var $var = Math.ceil ($B);
        if($var === $B){
            console.log('pow1');
            $result = Power1($A , $B);
        } else {
            console.log('pow2');
            $result = Power2($A , $B);
        }

        return $result;
    }
    document.getElementById('body').innerHTML = '2 at power 4 is ' + Power3(2,4);
    document.getElementById('body1').innerHTML = '2 at power 4.5 is  ' + Power3(2,4.5);
    document.getElementById('body2').innerHTML = '8 at power 6 is  ' + Power3(8,6);
    document.getElementById('body3').innerHTML = '2 at power 1.4 is  ' + Power3(2,1.4);
</script>