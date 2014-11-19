<?php
/**
 * Write a real-valued function Sin1(x, ε) (x and ε are real numbers, ε > 0)
 * that returns an approximate value of the function sin(x) defined as follows:
 * sin(x) = x − x3/(3!) + x5/(5!) − … + (−1)n·x2·n+1/((2·n+1)!) + … .
 * Stop adding new terms to the sum when the absolute value of the next term will
 * be less than ε. Using this function, find the approximate values of the
 * function sin(x) at a given point x for six given ε.
 */

include 'phpHelper.php';
?>
<script>
    function Sin1(x, ε){
        if(ε <= 0){

            return ' ε is negative number ' ;
        }
        var factorial_1 = 1 ;
        var factorial_2 = 1 ;
        var n_1 = 1 ;
        var n_2 = n_1 + 2 ;

        var sin  = x ;
        var val1 = 1 ;
        var val2 = 1 ;

        while( val2 > ε ){
            for( var i=n_1 ; i > 0 ; i-- ){
                factorial_1 = factorial_1 * i ;
                console.log(factorial_1);
            }
            for( var j = n_2 ; j > 0 ; j-- ){
                factorial_2 = factorial_2 * i ;
                console.log(factorial_2);
            }
            var pow2 = Math.pow(x, n_2);
            val2 = pow2/ (factorial_2*2);
            console.log(val2);
            var pow1 = Math.pow(x,n_1)
            val1 =  pow1 / factorial_1;
            console.log(val1);
            sin = sin + val2 - val1;
            n_1 += 2 ;
            n_2 = n_1 + 2 ;
        }

        return sin ;
    }

    var x1 = 5 ; var ε1 = 0.8 ;
    var x2 = 4 ; var ε2 = 0.01 ;
    var x3 = 6 ; var ε3 = 0.001 ;
    var x4 = 9 ; var ε4 = 0.0001 ;

     document.getElementById('body').innerHTML = 'x is ' + x1 + ' , ε is ' + ε1 + ' and approximate value of the function sin(x) is : ' + Sin1(x1 , ε1);
    document.getElementById('body1').innerHTML = 'x is ' + x2 + ' , ε is ' + ε2 + ' and approximate value of the function sin(x) is : ' + Sin1(x2 , ε2);
    document.getElementById('body2').innerHTML = 'x is ' + x3 + ' , ε is ' + ε3 + ' and approximate value of the function sin(x) is : ' + Sin1(x3 , ε3);
    document.getElementById('body3').innerHTML = 'x is ' + x4 + ' , ε is ' + ε4 + ' and approximate value of the function sin(x) is : ' + Sin1(x4 , ε4);

</script>