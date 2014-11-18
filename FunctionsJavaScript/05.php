<head>
    <title>5</title>
</head>

<?php
/**
 * Write a real-valued function TriangleP(a, h) that returns the perimeter of an
 * isosceles triangle with given base a and altitude h (a and h are real numbers).
 * Using this function, find the perimeters of three triangles with given bases and
 * altitudes. Note that the leg b of an isosceles triangle can be found by the
 * Pythagorean theorem:
 * b2 = (a/2)2 + h2.
 */
?>
<div id="body"></div>
<script>
    function TriangleP(a, h){
        var a2   = Math.pow((a/2) , 2);
        var h2   = Math.pow(h , 2);
        var root = Math.sqrt((a2+h2));
        var perimeter = ( 2 * root ) + a ;
        perimeter = perimeter.toFixed(3);

        return perimeter;
    }
    document.getElementById('body').innerHTML = 'perimeter of this triangle is : '+TriangleP(4 , 6);

</script>