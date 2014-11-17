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

function Perim($xA, $yA, $xB, $yB, $xC, $yC){
    $a = Leng($xA, $xB, $yA, $yB);
   // var_dump($a);
    $b = Leng($xB, $xC, $yB, $yC);
   // var_dump($b);
    $c = Leng($xA, $xC, $yA, $yC);
   // var_dump($c);

    return ($a + $b + $c);
}

echo(Perim(2,2,2,6,6,2) . '<br/>');
echo(Perim(0,0,0,1,1,0) . '<br/>');