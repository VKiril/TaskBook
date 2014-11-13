<?php
/**
 * Write a real-valued function TriangleP(a, h) that returns the perimeter
 * of an isosceles triangle with given base a and altitude h (a and h are real numbers).
 * Using this function, find the perimeters of three triangles with given bases and altitudes.
 * Note that the leg b of an isosceles triangle can be found by the Pythagorean theorem:
 * b2 = (a/2)2 + h2.
 */
function TriangleP($a, $h){
    return ((2*(sqrt(pow($a/20,2)+pow($h , 2)) ))+$a);
}

echo'perimeter is : '.(number_format(TriangleP(4 , 6), 3, ',', ' '));