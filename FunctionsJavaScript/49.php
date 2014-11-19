<?php
/**
 * Taking into account the formula GCD(A, B, C) = GCD(GCD(A, B), C)
 * and using the GCD2 function from the task Func46, write an integer
 * function GCD3(A, B, C) that returns the greatest common divisor of
 * three positive integers A, B, C. Using this function, find the
 * greatest common divisor for each of triples (A, B, C), (A, C, D), (B, C, D)
 * provided that integers A, B, C, D are given.
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

    function GCD3(A, B, C){
        var great1 = GCD2(A , B);
        console.log(great1[0]);
        var temp  = great1[0] ;
        var great2 = GCD2(C, temp);
        console.log(great2[0]);

        return great2[0];
    }


    var A =  10 ;
    var B =  20 ;
    var C =  30 ;
    var D = 100 ;

     document.getElementById('body').innerHTML = 'a is ' + A + ' b is ' + B + ' c is ' + C + ' and greatest common divisor  is ' + GCD3(A,B,C);
     document.getElementById('body1').innerHTML = 'a is ' + A + ' b is ' + B + ' d is ' + D + ' and greatest common divisor  is ' + GCD3(A,B,D);
</script>