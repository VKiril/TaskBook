<head>
    <title>60</title>
</head>

<?php
/**
 * Using the Dist function from the task Proc59, write a procedure Alts(xA, yA, xB, yB, xC, yC, hA, hB, hC)
 * that evaluates the altitudes hA, hB, hC drawn from the vertices A, B, C of a triangle ABC
 * (the coordinates of vertices are input parameters, the values of altitudes are output parameters).
 * Using this procedure, evaluate the altitudes of each of triangles ABC, ABD, ACD provided that the
 * coordinates of points A, B, C, D are given.
 */

echo('<div style="display: none">');
include '59.php';
echo('</div>');

function Alts($xA, $yA, $xB, $yB, $xC, $yC, &$hA, &$hB, &$hC){
    $hA = Dist( $xA, $yA, $xB, $yB, $xC, $yC);
    $hB = Dist( $xB, $yB, $xC, $yC, $xA, $yA);
    $hC = Dist( $xA, $yA, $xC, $yC, $xB, $yB);
}
$hA = 0 ;
$hB = 0 ;
$hC = 0 ;

Alts(2, 2, 6, 2, 2, 6, $hA, $hB, $hC);
echo('first triangle altitudes :<br/>'.$hA.'<br/>'. $hB .'<br/>' . $hC.'<br/>' );
Alts(0, 0, 0, 1, 1, 0, $hA, $hB, $hC);
echo('first triangle altitudes :<br/>'.$hA.'<br/>'. $hB .'<br/>' . $hC.'<br/>' );