<?php
/**
 * Write a real-valued function CircleS(R) that returns the area of
 * a circle of radius R (R is a real number). Using this function,
 * find the areas of three circles of given radiuses. Note that the
 * area of a circle of radius R can be found by formula S = π·R2.
 * Use 3.14 for a value of π.
 */

const pi = 3.14;
function CircleS($R){

    return (pi * pow($R , 2) );
}
$r1 = 3;
$r2 = 9;
$r3 = 18;
echo'first circle area is :'.(CircleS($r1)).'<br/>';
echo'second circle area is :'.(CircleS($r2)).'<br/>';
echo'third circle area is :'.(CircleS($r3)).'<br/>';
