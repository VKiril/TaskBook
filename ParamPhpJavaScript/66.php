<?php
/**
 * Using the TPoint and TTriangle types and the Leng and Perim functions (see Param64 and Param65),
 * write a real-valued function Area(T) that returns the area of a triangle T (T is an input parameter of TTriangle
 * type):
 * SABC = (p·(p − |AB|)·(p − |AC|)·(p − |BC|))1/2,
 * where p is the half-perimeter. Using this function, find the areas of triangles ABC, ABD, ACD provided that the
 * coordinates of points A, B, C, D are given.
 */


echo '<div style="display: none;">';
include 'helper.php';
include '64.php';
require_once '65.php';
echo '</div >';
use TPoint\TPoint;
use ParamPhpJavaScrit\TTriangle\TTriangle;
function Leng1($a,$b){
    $length = pow(($a->getX() - $b->getX()),2) + pow($a->getY() - $b->getY(),2);
    $len = sqrt($length);
    return $len;
}
function Area($T){


    $a = new TPoint($T->getAx(), $T->getAy());
    $b = new TPoint($T->getBx(), $T->getBy());
    $c = new TPoint($T->getCx(), $T->getCy());

    $l1 = Leng1($a, $b);
    $l2 = Leng1($b, $c);
    $l3 = Leng1($c, $a);

    $p  = $l1+$l2+$l3;
    //SABC = (p·(p − |AB|)·(p − |AC|)·(p − |BC|))1/2,

    return sqrt($p*($p-$l1) * ($p-$l2) * ($p-$l3));
}

$t1 = new TTriangle(2,6,7,1,2,1);
echo Area($t1);
