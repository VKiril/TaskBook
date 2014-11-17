<head>
    <title>5</title>
</head>
<?php
/**
 * Write an integer function SumRange(A, B) that returns a sum of
 * all integers in the range A to B inclusively (A and B are integers).
 * In the case of A > B the function returns 0. Using this function, find a
 * sum of all integers in the range A to B and in the range B to C provided
 * that integers A, B, C are given.
 */

?>
<div id="body"></div>
<script>
    function SumRange(A, B){
        var i   = 0;
        var sum = 0 ;
        for(i = A ; i <= B ; i ++){
            sum += i;
        }
        return sum;
    }

    document.getElementById('body').innerHTML = 'the sum of all numbers between 0 and 100 is ' + SumRange(0 , 100);

</script>