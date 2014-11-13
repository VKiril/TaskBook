<?php
/**
 * Write a real-valued function RadToDeg(R) that converts the angle
 * value R in radians into the one in degrees (R is a real number, 0 ≤ R < 2·π).
 * Note that 180° = π radians and use 3.14 for a value of π. Using this function,
 * convert five given angles from radians into degrees.
 */

const doublePi = 6.2831853;
const radians  = 0.0174532925;

function RadToDeg($R){
    if($R>doublePi){
        $response = 'extra_range_value';
    }else{
        $response = $R / radians ;
    }
    return $response;
}

$var1 = 3.14;
echo('number of degrees of in '.$var1.' radians  is '.RadToDeg($var1));