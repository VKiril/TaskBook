<?php
/**
 * Using the TDate type and the DaysInMonth function (see Param59 and Param60), write an integer function
 * CheckDate(D) with a parameter D of TDate type. If the date D is a correct date then the function returns 0;
 * if the date D contains an invalid month number or invalid day number for the correct month then the function
 * returns 1 or 2 respectively. Output the return values of this function for five given dates.
 */

include 'helper.php';
echo '<div style="display: none;">';
require_once '59.php';
include '60.php';
echo '</div >';
use ParamPhpJavaScrit\TDate\TDate;


function CheckDate1($d1){
    $response = 0;
    $a = new TDate($d1['d'],$d1['m'],$d1['y']);
    if($a->getMonth() > 12){
        $response = 1 ;
    }
    $numberOfDays = DaysInMonth($a);
    if ($a->getDay() > $numberOfDays['days']){
        $response = 2 ;
    }

    return $response;
}

$param = array(
    'd'=>29,
    'm'=>02,
    'y'=>2014,
);
$result = CheckDate1($param);
var_dump($result);