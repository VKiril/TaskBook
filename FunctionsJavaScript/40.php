<?php
/**
 * Write a real-valued function Exp1(x, ε) (x and ε are real numbers, ε > 0)
 * that returns an approximate value of the function exp(x) defined as follows:
 * exp(x) = 1 + x + x2/(2!) + x3/(3!) + … + xn/(n!) + …
 * (n! = 1·2·…·n). Stop adding new terms to the sum when the value of the next
 * term will be less than ε. Using this function, find the approximate values
 * of the function exp(x) at a given point x for six given ε.
 */
include 'phpHelper.php';
?>
<script>
    function Exp1( x, ε ){
        var n = 1 ;
        var val = 1 ;
        var exp = 1 ;

        while( val > ε ){

            var factorial = 1 ;
            for( var i = n ; i > 0 ; i -- ){
                factorial = factorial* i;
            }
            val = x * n / factorial;
            exp += val ;
            n++;
        }

        return val.toFixed(13) ;
    }
    var x1 = 5 ; var ε1 = 0.1 ;
    var x2 = 4 ; var ε2 = 0.01 ;
    var x3 = 6 ; var ε3 = 0.001 ;
    var x4 = 9 ; var ε4 = 0.0001 ;

     document.getElementById('body').innerHTML = 'x is ' + x1 + ' ε is ' + ε1 + ' and exp is : ' + Exp1(x1 , ε1);
    document.getElementById('body1').innerHTML = 'x is ' + x1 + ' ε is ' + ε2 + ' and exp is : ' + Exp1(x2 , ε2);
    document.getElementById('body2').innerHTML = 'x is ' + x1 + ' ε is ' + ε3 + ' and exp is : ' + Exp1(x3 , ε3);
    document.getElementById('body3').innerHTML = 'x is ' + x1 + ' ε is ' + ε4 + ' and exp is : ' + Exp1(x4 , ε4);

</script>