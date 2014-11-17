<?php
/*
 * Write a procedure TrianglePS(a, P, S) that computes the perimeter
 * P = 3·a and the area S = a2·(3)1/2/4 of an equilateral triangle with
 * the side a (a is an input parameter, P and S are output parameters,
 * all parameters are the real-valued ones). Using this procedure, find the
 * perimeters and the areas of three triangles with the given lengths of the sides.
 */
function TrianglePS($a, &$P=0, &$S=0){
    $P = 3*$a;
    $S = $a*$a/2;
}
TrianglePS(4 , $a , $b);
echo $a.'<br/>';
echo $b.'<br/>';
