<head>
    <title>58</title>
</head>
<?php
/**
 * Using the Leng and Perim functions from the tasks Proc56 and Proc57,
 * write a real-valued function Area(xA, yA, xB, yB, xC, yC) that returns the area of a triangle ABC:
 * SABC = (p·(p−|AB|)·(p−|AC|)·(p−|BC|))1/2,
 * where p is the half-perimeter. Using the Area function, find the areas of
 * triangles ABC, ABD, ACD provided that coordinates of points A, B, C, D are given.
 */

echo('<div style="display: none">');
include '57.php';
echo('</div>');

function Area($xA, $yA, $xB, $yB, $xC, $yC){
    $result = allLength($xA, $yA, $xB, $yB, $xC, $yC);
    $term1 = abs($result['perimeter'] - $result['length']['a']);
    $term2 = abs($result['perimeter'] - $result['length']['b']);
    $term3 = abs($result['perimeter'] - $result['length']['c']);
    $underRootExpression = $result['perimeter'] * $term1 * $term2 * $term3 ;
    $area = pow($underRootExpression , (1/2));
    $area = number_format($area ,3 , '.', ' ');
    $response  = array(
        'data_about_triangle' => $result ,
        'triangle_area'       => $area,
    );
    return $response ;
}


$area1 = Area(2,2,2,6,6,2);
$area2 = Area(0,0,0,1,1,0);
echo($area1['triangle_area']. '<br/>');
echo($area2['triangle_area']. '<br/>');