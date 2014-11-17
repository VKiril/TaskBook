<head>
    <title>57</title>
</head>
<?php
/**
 * Using the Leng function from the task Proc56, write a real-valued
 * function Perim(xA, yA, xB, yB, xC, yC) that returns the perimeter
 * of a triangle ABC with given coordinates of its vertices
 * (xA, yA, xB, yB, xC, yC are real-valued parameters). Using the Perim function,
 * find the perimeters of triangles ABC, ABD, ACD provided that
 * coordinates of points A, B, C, D are given
 */

echo('<div style="display: none">');
include '56.php';
echo('</div>');

function allLength($xA, $yA, $xB, $yB, $xC, $yC){

    $a = abs(Leng($xA, $xB, $yA, $yB));
    $b = abs(Leng($xB, $xC, $yB, $yC));
    $c = abs(Leng($xA, $xC, $yA, $yC));
    $len = array(
        'a'            => $a ,
        'b'            => $b ,
        'c'            => $c
    );
    $var = Perim($len);
    $result =  array(

        'perimeter'    => $var,
        'length'       => $len
    );
    return $result ;
}

function Perim($var){
    $perimeter = $var['a'] + $var['b'] + $var['c'];
    return $perimeter ;
}
$perimeter1 = allLength(2,2,2,6,6,2);
$perimeter2 = allLength(0,0,0,1,1,0);
echo($perimeter1['perimeter'] . '<br/>');
echo($perimeter2['perimeter'] . '<br/>');