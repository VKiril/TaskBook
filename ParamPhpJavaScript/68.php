<?php
/**
 * Using the TPoint and TTriangle types and the Dist function (see Param64, Param65, Param67), write a procedure Alts
 * (T, h1, h2, h3) that evaluates the altitudes h1, h2, h3 drawn from the vertices T.A, T.B, T.C of a triangle T (T is
 * an input parameter of TTriangle type, h1, h2, h3 are output real-valued parameters). Using this procedure, evaluate
 * the altitudes of each of triangles ABC, ABD, ACD provided that the coordinates of points A, B, C, D are given.
 */
echo '<div style="display: none;">';//
include 'helper.php';
include '67.php';
require_once '66.php';
require_once '64.php';
echo '</div >';

use TPoint\TPoint;
use ParamPhpJavaScrit\TTriangle\TTriangle;



$t1 = new TTriangle(2,6,7,1,2,1);
$s = Area($t1);

$a = new TPoint($t1->getAx(), $t1->getAy());
$b = new TPoint($t1->getBx(), $t1->getBy());
$c = new TPoint($t1->getCx(), $t1->getCy());

$length1 = Leng2($a,$b);
$length2 = Leng2($a,$c);
$length3 = Leng2($b,$c);


echo Dist($s , $length1).'<br/>';
echo Dist($s , $length2).'<br/>';
echo Dist($s , $length3).'<br/>';
