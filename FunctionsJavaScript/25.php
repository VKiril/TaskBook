<?php
/**
 * Write a function TrianglePS(a) that computes the perimeter
 * P = 3·a and the area S = a2·(3)1/2/4 of an equilateral triangle
 * with the side a and returns the result as two real numbers
 * (a is an input real-valued parameter). Using this function,
 * find the perimeters and the areas of three triangles with the
 * given lengths of the sides.
 */
include 'phpHelper.php';
?>
<script>
    function TrianglePS(a){
        var perimeter = 3 * a ;
        var area = ((Math.pow(a , 2) / 4 ) * Math.sqrt(5));
        area = area.toFixed(3);
        var result  = new Array(perimeter , area);

        return result;
    }
    var tr1 = TrianglePS(3);
    var tr2 = TrianglePS(5);
    document.getElementById('body').innerHTML = 'perimeter of triangle with side of 3 is ' + tr1[0] + ' area is ' + tr1[1];
    document.getElementById('body1').innerHTML = 'perimeter of triangle with side of 5 is ' + tr2[0] + ' area is ' + tr2[1];

</script>