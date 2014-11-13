<?php
/**
 * Write an integer function Quarter(x, y) that returns the
 * number of a coordinate quarter containing a point with nonzero
 * real-valued coordinates (x, y). Using this function, find the
 * numbers of coordinate quarters containing each of three points
 * with given nonzero coordinates.
 */

function Quarter($x, $y){
    if($x > 0 && $y > 0 ){

        return ' number of a coordinate quarter is : 1';
    }
    if($x < 0 && $y > 0 ){

        return 'number of a coordinate quarter is : 2';
    }
    if($x < 0 && $y < 0 ){

        return ' number of a coordinate quarter is : 3';
    }
    if($x > 0 && $y < 0 ){

        return ' number of a coordinate quarter is : 4';
    }
}
$x1 = 3 ; $y1 = -5;
echo 'x coordinate is : '.$x1.'y coordinate is : '.$y1.(Quarter($x1, $y1)).'<br/>';