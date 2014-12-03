<?php
/**
 * Using the TPoint type and the Leng function (see Param64), write a real-valued function PerimN(P, N) that returns
 * the perimeter of a polygon with N (> 2) vertices. The polygon vertices have the TPoint type; an array P contains
 * all vertices in order of walk. Using this function, find the perimeters of three polygons provided that the amount
 * of vertices and the coordinates of all vertices are given for each polygon.
 */

echo '<div style="display: none;">';
include 'helper.php';
include '67.php';
require_once '64.php';
echo '</div >';

use TPoint\TPoint;

$a = new TPoint(1,3);
$b = new TPoint(2,5);
$c = new TPoint(4,5);
$d = new TPoint(5,3);
$e = new TPoint(4,1);
$f = new TPoint(2,1);

$vertices = array(
    'a' => $a ,
    'b' => $b ,
    'c' => $c ,
    'd' => $d ,
    'e' => $e ,
    'f' => $f ,
);
var_dump($vertices);




function perimN($p, $n){
    $x = [];
    $x[1]=Leng2($p['a'],$p['b']);
    $x[2]=Leng2($p['c'],$p['b']);
    $x[3]=Leng2($p['c'],$p['d']);
    $x[4]=Leng2($p['d'],$p['e']);
    $x[5]=Leng2($p['e'],$p['f']);
    $x[6]=Leng2($p['a'],$p['f']);
    $sum = 0;
    foreach($x as $elem){
        $sum += $elem;
    }
    return $sum;
}
var_dump(perimN($vertices , 1));