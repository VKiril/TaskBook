<?php
/**
 * Write an integer function GCD2(A, B) that returns the greatest common divisor
 * (GCD) of two positive integers A and B. Use the Euclidean algorithm:
 * GCD(A, B) = GCD(B, A mod B),    if B ≠ 0;        GCD(A, 0) = A,
 * where "mod" denotes the operator of taking the remainder after integer division.
 * Using this function, find the greatest common divisor for each of pairs
 * (A, B), (A, C), (A, D) provided that integers A, B, C, D are given.
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
    var a1 = 12 ; var b1 = 30;
    var a2 = 5 ;  var b2 = 20;
    var a3 = 17 ; var b3 = 34;
    var a4 = 8 ;  var b4 = 64;
    document.getElementById('body').innerHTML = 'a is ' + a1 + ' b is ' + b1 + ' and greater common divider is ' + GCD2(a1, b1 );
    document.getElementById('body1').innerHTML = 'a is ' + a2 + ' b is ' + b2 + ' and greater common divider is ' + GCD2(a2, b2 );
    document.getElementById('body3').innerHTML = 'a is ' + a3 + ' b is ' + b3 + ' and greater common divider is ' + GCD2(a3, b3 );
    document.getElementById('body2').innerHTML = 'a is ' + a4 + ' b is ' + b4 + ' and greater common divider is ' + GCD2(a4, b4 );

</script>