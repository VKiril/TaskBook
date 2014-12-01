<?php
/**
 * Using the TDate type and the LeapYear function (see Param59), write an integer function DaysInMonth(D)
 * with a parameter D of TDate type. The function returns the amount of days for the month of date D. Output
 * the return values of this function for five given dates (all dates are assumed to be correct).
 */

include 'helper.php';
echo '<div style="display: none;">';
require_once '59.php';
echo '</div >';
use ParamPhpJavaScrit\TDate\TDate;


/**
 * @param TDate $D
 * @return mixed
 */
function DaysInMonth($D){

    $nrOfDays = $D->isLeapYear()
        ?   29
        :   28;

    $days = array(
        1  => 31,
        2  => $nrOfDays,
        3  => 31,
        4  => 30,
        5  => 31,
        6  => 30,
        7  => 31,
        8  => 31,
        9  => 30,
        10 => 31,
        11 => 30,
        12 => 31,
    );

    //return 'month '.$D->getMonth().' have '.$days[$D->getMonth()].' DAYS';
    return array(
        'month' => $D->getMonth(),
        'days'  => $days[$D->getMonth()],
    );
}

$a = DaysInMonth(new TDate(12,2,2014));
var_dump($a);