<?php
/**
 * Write a real-valued function Atan1(x, ε) (x and ε are real numbers, |x| < 1, ε > 0)
 * that returns an approximate value of the function atan(x) defined as follows:
 * atan(x) = x − x3/3 + x5/5 − … + (−1)n·x2·n+1/(2·n+1) + … .
 * Stop adding new terms to the sum when the absolute value of the next term will be less than ε.
 * Using this function, find the approximate values of the function atan(x) at a given
 * point x for six given ε.
 */

include 'phpHelper.php';
?>
<script>
    function Atan1(x, ε){

        if( ε > 0 && Math.abs(x) > 1 ){

            return 'unrespect initial conditions ' ;
        }
        var n_1 = 1 ;
        var n_2 = n_1 + 2 ;
        var a1 = 0;
        var a2 = 0;

        var atan = x;
        while(a2 > ε){
             a1 = Math.pow(x,n_1) / n_1;
             a2 = Math.pow(x,n_2) / n_2;
             atan = atan + a2-a1 ;
             n_1 += 2 ;
             n_2 = n_1 + 2 ;
        }

        return atan ;
    }
    var x1 = 0.5 ; var ε1 = 0.1 ;
    var x2 = 0.4 ; var ε2 = 0.01 ;
    var x3 = 0.6 ; var ε3 = 0.001 ;
    var x4 = 0.9 ; var ε4 = 0.0001 ;


     document.getElementById('body').innerHTML = 'x is ' + x1 + ' ε is ' + ε1 + ' and atan of x is ' + Atan1(x1, ε1);
    document.getElementById('body1').innerHTML = 'x is ' + x2 + ' ε is ' + ε2 + ' and atan of x is ' + Atan1(x2, ε2);
    document.getElementById('body2').innerHTML = 'x is ' + x3 + ' ε is ' + ε3 + ' and atan of x is ' + Atan1(x3, ε3);
    document.getElementById('body4').innerHTML = 'x is ' + x4 + ' ε is ' + ε4 + ' and atan of x is ' + Atan1(x4, ε4);
</script>