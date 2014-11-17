<head>
    <title>56</title>
</head>

<?php
/**
 *  Write a real-valued function Leng(xA, yA, xB, yB) that returns the
 * length of a segment AB with given coordinates of its endpoints:
 * |AB| = ((xA − xB)2 + (yA − yB)2)1/2
 * (xA, yA, xB, yB are real-valued parameters). Using this function,
 * find the lengths of segments AB, AC, AD provided that coordinates of points A, B, C, D are given.
 */

//number_format(2.23665865, 3, ',', ' ')

function Leng($xA, $xB, $yA, $yB){
    $a = (pow(($xA - $xB) , 2));
    $b = (pow(($yA - $yB) , 2));
    $result = pow(($a+$b) , (1/2));
    if(!(ceil($result) == $result)){
        $result = number_format($result, 3, ',', ' ');
    }

    return $result ;

}
echo(Leng(6,2,4,1).'<br/>');
echo(Leng(7,1,3,1).'<br/>');
echo(Leng(10,0,10,0).'<br/>');