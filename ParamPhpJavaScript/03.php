<?php
/**
 *  Write a procedure MinmaxNum(A, N, NMin, NMax) that finds the order numbers
 * NMin and NMax of the minimal and the maximal element of an array A of N real
 * numbers (integers NMin and NMax are output parameters). Using this procedure,
 * find the order numbers of the minimal and the maximal elements of three given
 * arrays A, B, C whose sizes are NA, NB, NC respectively.
 */

include 'helper.php';
echo('<div style="display: none;">');
include'01.php';
include'02.php';
echo('</div>');
function MinmaxNum($A, $N, &$NMin, &$NMax){
    $NMin = MinElem($A , $N);
    $NMax = MaxElem($A , $N);

}
$arr1 =  [10,2,4,3,6,1,98,5,4,3,23,65];

MinmaxNum($arr1 , 5,$min , $max);
echo('max element of ');    print_r($arr1);echo($max.' and min is '.$min.'until 5<br/>');
MinmaxNum($arr1 , 7,$min , $max);
echo('max element of ');    print_r($arr1);echo($max.' and min is '.$min.'until 7<br/>');
MinmaxNum($arr1 , 3,$min , $max);
echo('max element of ');    print_r($arr1);echo($max.' and min is '.$min.'until 3<br/>');


