<head>
    <title>4</title>
</head>
<?php
/**
 * Write a real-valued function RingS(R1, R2) that returns the area of a
 * ring bounded by a concentric circles of radiuses R1 and R2 (R1 and R2 are real
 * numbers, R1 > R2). Using this function, find the areas of three rings with given outer
 * and inner radiuses. Note that the area of a circle of radius R can be found by formula
 * S = π·R2. Use 3.14 for a value of π.
 */
?>
<div id="placeholder"></div>
<script>
    const  pi = 3.14 ;
    function RingS(R1, R2){
        var s1 = (Math.pow(R1 , 2) * pi) ;
        var s2 = (Math.pow(R2 , 2) * pi) ;
        console.log('s1 is ' + s1 + ' and s2 is' + s2);
        var ringArea = Math.abs(s2 - s1);
        ringArea = ringArea.toFixed(3);
        return ringArea ;
    }
    document.getElementById('placeholder').innerHTML = RingS(4 , 6);
</script>