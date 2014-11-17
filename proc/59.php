<head>
    <title>59</title>
</head>

<?php
/**
 * Using the Leng and Area functions from the tasks Proc56 and Proc58,
 * write a real-valued function Dist(xP, yP, xA, yA, xB, yB) that returns
 * the distance D(P, AB) between a point P and a line AB:
 * D(P, AB) = 2·SPAB/|AB|,
 * where SPAB is the area of the triangle PAB. Using this function, find the distance
 * between a point P and each of lines AB, AC, BC provided that coordinates of
 * points P, A, B, C are given.
 */

echo('<div style="display: none">');
include '58.php';
echo('</div>');
function Dist( $xA, $yA, $xB, $yB, $xP, $yP){
    $result = Area($xA, $yA, $xB, $yB, $xP, $yP);
    $area = $result['triangle_area'];
    $a = $result['data_about_triangle']['length']['a'];
    $distance = (2 * $area) / $a ;
    return $distance ;
}


$distance1 = Dist(2,2,2,6,6,2);
$distance2 = Dist(0,0,0,1,1,0);
echo($distance1. '<br/>');
echo($distance2. '<br/>');
