<?php
/**
 * Write a real-valued function CircleS(R) that returns the area of a circle
 * of radius R (R is a real number). Using this function, find the areas of
 * three circles of given radiuses. Note that the area of a circle of radius
 * R can be found by formula S = π·R2. Use 3.14 for a value of π.
 */
?>
<p id="demo"></p>
<script>
    const pi = 3.14;
    function CircleS(R){
        var area = pi* Math.pow(R , 2);
        return area ;
    }
    document.getElementById('demo').innerHTML = 'circle area is '+CircleS(9);
</script>
