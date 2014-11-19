<?php
/**
 * Taking into account that the least common multiple of two positive integers A and B
 * equals A·(B/GCD(A, B)), where GCD(A, B) is the greatest common divisor of A and B,
 * and using the GCD2 function from the task Func46, write an integer function LCM2(A, B)
 * that returns the least common multiple of A and B. Using this function, find the least
 * common multiple for each of pairs (A, B), (A, C), (A, D) provided that integers A, B, C,
 * D are given.
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

    function LCM2(A, B){
        var result = GCD2(A , B);
        if(result[1] == 'have divisors'){
            console.log(result);
            var response = A*(B / result[0]);
        } else {
            console.log(result);
            response = 'don\'t have any common divider';
        }


        return response ;
    }
    var a1 = 3 ; var b1 = 9 ;
    var a2 = 2 ; var b2 = 10 ;
    var a3 = 4 ; var b3 = 20 ;
    var a4 = 5 ; var b4 = 100 ;
     document.getElementById('body').innerHTML = 'a is ' + a1 + ' b is ' + b1 + ' and the least common multiple is : ' + LCM2(a1, b1);
    document.getElementById('body1').innerHTML = 'a is ' + a2 + ' b is ' + b2 + ' and the least common multiple is : ' + LCM2(a2, b2);
    document.getElementById('body2').innerHTML = 'a is ' + a3 + ' b is ' + b3 + ' and the least common multiple is : ' + LCM2(a3, b3);
    document.getElementById('body3').innerHTML = 'a is ' + a4 + ' b is ' + b4 + ' and the least common multiple is : ' + LCM2(a4, b4);
</script>