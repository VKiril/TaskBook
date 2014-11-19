<?php
/**
 * Write a real-valued function Power4(x, a, ε) (x, a, ε are real numbers, |x| < 1, a, ε > 0)
 * that returns an approximate value of the function (1 + x)a defined as:
 * (1 + x)a = 1 + a·x + a·(a−1)·x2/(2!) + … + a·(a−1)·…·(a−n+1)·xn/(n!) + … .
 * Stop adding new terms to the sum when the absolute value of the next term will
 * be less than ε. Using this function, find the approximate values of the function
 * (1 + x)a at a given point x for a given exponent a and six given ε.
 */
include 'phpHelper.php';
?>
<script>
    function Power4(x, a, ε){
        if(!(Math.abs(x) < 1 && ε > 0) ){

            return '\'incorrect parameters \'';
        }
        var factorial = 1 ;
        var n = 1 ;
        var term1 = 1 ;
        var expression = 1 ;
        var aa = 1 ;
        while(term1>ε){
            for( var i = a ; i > 0 ; i -- ){
                factorial = factorial* i;
                console.log(aa);
                aa = a ;
                aa = aa * (--aa);
                aa -- ;
                console.log(aa);
            }
            factorial = factorial * (aa+1);
            term1 = ((aa * Math.pow(x , n)) / factorial);
            expression =(expression + term1) ;
            n++;
        }

        return expression ;

    }
    var x = 0.5;
    var a = 3;
    var ε = 0.3;
    document.getElementById('body').innerHTML = Power4(x,a,ε);
</script>