<?php
/**
 * Using the TPoint and TTriangle types and the Leng and Area functions (see Param64–Param66), write a real-valued
 * function Dist(P, A, B) that returns the distance D(P, AB) between a point P and a line AB:
 * D(P, AB) = 2·SPAB/|AB|,
 * where SPAB is the area of the triangle PAB (parameters P, A, B are input parameters of TPoint type). Using this
 * function, find the distance between a point P and each of lines AB, AC, BC provided that the coordinates of
 * points P, A, B, C are given.
 */

echo '<div style="display: none;">';
include 'helper.php';
//include '66.php';
require_once '66.php';
require_once '64.php';
echo '</div >';

use TPoint\TPoint;
use ParamPhpJavaScrit\TTriangle\TTriangle;

function Dist($S  , $A ){
    return ((2*$S)/$A);
}

function Leng2($a,$b){
    $length = pow(($a->getX() - $b->getX()),2) + pow($a->getY() - $b->getY(),2);
    $len = sqrt($length);
    return $len;
}

$t1 = new TTriangle(2,6,7,1,2,1);
$s = Area($t1);

$a = new TPoint($t1->getAx(), $t1->getAy());
$b = new TPoint($t1->getBx(), $t1->getBy());
$length = Leng2($a,$b);


echo Dist($s , $length);
