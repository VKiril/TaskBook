
<?php
/*
 * Write a procedure RectPS(x1, y1, x2, y2, P, S) that computes the perimeter P
 * and the area S of a rectangle whose opposite vertices have coordinates (x1, y1)
 * and (x2, y2) and sides are parallel to coordinate axes (x1, y1, x2, y2 are input
 * parameters, P and S are output parameters, all parameters are the real-valued ones).
 * Using this procedure, find the perimeters and the areas of three rectangles
 * with the given opposite vertices.*/

function RectPS($x1, $y1, $x2, $y2, &$P, &$S){

    $P = (($x2-$x1)+($y2-$y1))*2;
    $S = (($x2-$x1)*($y2-$y1));
}
RectPS(2,1,6,7,$a,$b);
echo 'perimeter '.$a.'<br/>';
echo 'area  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$b.'<br/>';