<?php
/**
 * Write a real-valued function DegToRad(D) that converts the
 * angle value D in degrees into the one in radians (D is a real
 * number, 0 ≤ D < 360). Note that 180° = π radians and use 3.14
 * for a value of π. Using this function, convert five given angles
 * from degrees into radians
 */

const degree = 0.0174532925;

function DegToRad($D){
    return ($D * degree);
}
$numb = 180 ;
echo('number of degrees is : '.$numb . ' and this is '.(DegToRad($numb).'radians')).'<br/>';

$numb = 360 ;
echo('number of degrees is : '.$numb . ' and this is '.(DegToRad($numb).'radians')).'<br/>';

$numb = 90 ;
echo('number of degrees is : '.$numb . ' and this is '.(DegToRad($numb).'radians')).'<br/>';