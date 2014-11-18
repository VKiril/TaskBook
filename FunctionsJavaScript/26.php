<?php
/**
 * Write a function RectPS(x1, x2, y1, y2) that computes and returns the perimeter
 * P and the area S of a rectangle whose opposite vertices have coordinates (x1, y1)
 * and (x2, y2) and sides are parallel to coordinate axes (x1, y1, x2, y2 are input
 * real-valued parameters). Using this function, find the perimeters and the areas
 * of three rectangles with the given opposite vertices.
 */
include 'phpHelper.php';
?>
<script>
    function RectPS(x1, x2, y1, y2){
        var a = x2 - x1 ;
        var b = y2 - y1 ;
        var result = new Array('null' , 'null');
        if(a > 0 && b > 0){
            var perimeter = a + a + b + b ;
            var area = a * b ;
            var result = new Array(perimeter , area) ;
        }

        return result ;
    }
    var r1 = RectPS(0,6,0,8);
    var r2 = RectPS(1,7,1,9);
    document.getElementById('body').innerHTML = 'the rectangle with coordinates x1.x2.y1.y2 (0.6.0.8) have perimeter ' + r1[0] + ' and area ' +r1[1];
    document.getElementById('body1').innerHTML = 'the rectangle with coordinates x1.x2.y1.y2 (1.7.1.9) have perimeter ' + r2[0] + ' and area ' +r2[1];

</script>