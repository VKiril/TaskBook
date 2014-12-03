<?php
/**
 * Using the TPoint and TTriangle types and the Area function (see Param64–Param66), write a real-valued
 * function AreaN(P, N) that returns the area of a convex polygon with N (> 2) vertices. The polygon vertices have
 * the TPoint type; an array P contains all vertices in order of walk. Using this function, find the areas of three
 * polygons provided that the amount of vertices and the coordinates of all vertices are given for each polygon.
 */

echo '<div style="display: none;">';
include 'helper.php';
include '67.php';
require_once '64.php';
echo '</div >';

use TPoint\TPoint;
use ParamPhpJavaScrit\TTriangle\TTriangle;



$vertices = array(
    /*'a'*/0 => new TPoint(1,3) ,
    /*'b'*/1 => new TPoint(2,5) ,
    /*'c'*/2 => new TPoint(4,5) ,
    /*'d'*/3 => new TPoint(5,3) ,
    /*'e'*/4 => new TPoint(4,1) ,
    /*'f'*/5 => new TPoint(2,1) ,
);
var_dump($vertices);

function areaN($p){
    $totalArea = 0 ;
    for($i = 1 ; $i<sizeof($p) -1 ; $i++){
        $triangle = new TTriangle($p[0   ]->getX(),$p[0   ]->getY(),
                                  $p[$i  ]->getX(),$p[$i  ]->getY(),
                                  $p[$i+1]->getX(),$p[$i+1]->getY() );
        $totalArea += Area($triangle);
    }

    return $totalArea;
}


var_dump(areaN($vertices));