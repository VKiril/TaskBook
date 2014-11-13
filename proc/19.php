<?php
/**
 * Write a real-valued function RingS(R1, R2) that returns the area of a
 * ring bounded by a concentric circles of radiuses R1 and R2 (R1 and R2
 * are real numbers, R1 > R2). Using this function, find the areas of three
 * rings with given outer and inner radiuses. Note that the area of a circle
 * of radius R can be found by formula S = π·R2. Use 3.14 for a value of π.
 */
const pi = 3.14;
function RingS($R1, $R2){
    $s1 = pow($R1 , 2) * pi ;
    $s2 = pow($R2 , 2) * pi ;
    return ($s1 - $s2);
}

echo 'first ring\'s area is: '.(RingS(4,3).'<br/>');
echo 'second ring\'s area is: '.(RingS(5,4).'<br/>');
echo 'third ring\'s area is: '.(RingS(6,5).'<br/>');