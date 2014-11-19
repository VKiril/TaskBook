<?php
/**
 * Write a real-valued function Ln1(x, ε) (x and ε are real numbers, |x| < 1, ε > 0)
 * that returns an approximate value of the function ln(1 + x) defined as follows:
 * ln(1 + x) = x − x2/2 + x3/3 − … + (−1)n·xn+1/(n+1) + … .
 * Stop adding new terms to the sum when the absolute value of the next term will be
 * less than ε. Using this function, find the approximate values of the
 * function ln(1 + x) at a given point x for six given ε.
 */

include 'phpHelper.php';
?>
<script>
    function Ln1(x, ε){
        if( ε < 0 && Math.abs(x) < 1){

            return 'ε is negative number ' ;
        }
        var a1 = 1 ;
        var a2 = 1;
        var n_1 = 1 ;
        var n_2 = n_1 + 1 ;

        var ln = x;
        while(a1 > ε){
            a1 = (Math.pow(x,n_1) / n_2);
            a2 = ln + (Math.pow(x,n_2) / n_1);
            console.log(a1 + 'a1 and '+ a2 + ' a2');
            ln = a2 - a1;
            n_1 ++ ;
            n_2 = n_1 + 1 ;
            if(a1 < ε){
                return ln;
            }
        }

        return ln ;
    }

    var x1 = 0.5 ; var ε1 = 0.01 ;
    var x2 = 0.5 ; var ε2 = 0.001 ;
    var x3 = 0.5 ; var ε3 = 0.0001 ;
    var x4 = 0.5 ; var ε4 = 0.1 ;
    document.getElementById('body').innerHTML = Ln1(x1 ,ε1 );
    document.getElementById('body1').innerHTML = Ln1(x2 ,ε2 );
    document.getElementById('body2').innerHTML = Ln1(x3 ,ε3 );
    document.getElementById('body3').innerHTML = Ln1(x4 ,ε4 );
</script>