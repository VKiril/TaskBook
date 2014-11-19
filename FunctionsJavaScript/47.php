<?php
/**
 * Using the GCD2 function from the task Func46, write a procedure Frac1(a, b, p, q),
 * that simplifies a fraction a/b to the irreducible form p/q (a and b are input integer
 * parameters, p and q are output integer parameters). The sign of a resulting
 * fraction p/q is assigned to its numerator, so q > 0. Using this procedure,
 * find the numerator and the denominator for each of irreducible fractions
 * a/b + c/d, a/b + e/f, a/b + g/h provided that integers a, b, c, d, e, f, g, h are given.
 */
include 'phpHelper.php';
?>
<script>
    function GCD2(A, B){
        var result = new Array();
        if(A > B){
            var min = B;
            var max = A;
        } else {
            var min = A;
            var max = B;
        }
        if(max % min == 0 ){
            return result = [min , 'have divisors'];
        } else {
            for (var i = 2 ; i < min ; i ++){
                if( min % i == 0 && max % i == 0){
                    var   temp = i ;
                    var   result = [i , 'have divisor' ];


                } else {
                    if (result[1] != 'have divisor' )
                        result = ['null' , 'don\'t have divisors'];
                }
            }
        }

        return result;
    }
    function Frac1(a, b ){
        gcd = GCD2(a , b);
        if(gcd[0] != 'null'){
            var p = a/gcd[0];
            var q = b/gcd[0];
        } else {
            var p = a;
            var q = b;
        }
        var result = new Array(p , q);

        return result;
    }
    var a1 = 3 ; var b1 = 9 ;
    var a2 = 2 ; var b2 = 10 ;
    var a3 = 4 ; var b3 = 20 ;
    var a4 = 5 ; var b4 = 100 ;
    var result1 = Frac1(a1, b1)
    var result2 = Frac1(a2, b2)
    var result3 = Frac1(a3, b3)
    var result4 = Frac1(a4, b4)

     document.getElementById('body').innerHTML = 'a is ' + a1 + ' b is ' + b1 + ' and a/b is ' + result1[0] + '/' + result1[1];
    document.getElementById('body1').innerHTML = 'a is ' + a2 + ' b is ' + b2 + ' and a/b is ' + result2[0] + '/' + result2[1];
    document.getElementById('body2').innerHTML = 'a is ' + a3 + ' b is ' + b3 + ' and a/b is ' + result3[0] + '/' + result3[1];
    document.getElementById('body3').innerHTML = 'a is ' + a4 + ' b is ' + b4 + ' and a/b is ' + result4[0] + '/' + result4[1];


</script>