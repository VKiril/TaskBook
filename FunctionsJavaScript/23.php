<?php
/**
 * Write a function PowerA234(A) that computes the second, the third, and the
 * fourth degrees of a real number A and returns these degrees as three real
 * numbers (A is an input parameter). Using this function, find the second,
 * the third, and the fourth degrees of five given real numbers.
 */
include 'phpHelper.php';
?>
<script>
    function PowerA234(A){

        var second = Math.pow(A , 2);
        var third  = Math.pow(A , 3);
        var fourth = Math.pow(A , 4);
        var result = new Array(second , third , fourth);
        return result;
    }
    var a = PowerA234(2);
    var b = PowerA234(3);
    var c = PowerA234(5);
     document.getElementById('body').innerHTML = 'the third degree is ' + a[0] + ' the second degree is ' + a[1] + ' the fourth degree is ' + a[2];
    document.getElementById('body1').innerHTML = 'the third degree is ' + b[0] + ' the second degree is ' + b[1] + ' the fourth degree is ' + b[2];
    document.getElementById('body2').innerHTML = 'the third degree is ' + c[0] + ' the second degree is ' + c[1] + ' the fourth degree is ' + c[2];
</script>
