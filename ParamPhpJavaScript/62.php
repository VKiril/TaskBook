<?php
/**
 * Using the TDate type and the DaysInMonth and CheckDate functions (see Param59−Param61), write a procedure
 * PrevDate(D) that changes a correct date D (of TDate type) to the previous one; if D contains an invalid date
 * then it remains unchanged. The parameter D is an input and output parameter. Apply this procedure to five given
 * dates.
*/

include 'helper.php';
echo '<div style="display: none;">';
require_once '59.php';
include '61.php';
echo '</div >';
use ParamPhpJavaScrit\TDate\TDate;



function PrevDate1($d){

    $checkDate = CheckDate1($d);

    if($checkDate != 0 ){
        return $d;
    } else {
        if($d->getMonth() == 1 && $d->getDay() == 1 ){
            echo '1';
            $d->setDay(31);
            $d->setMonth(12);
            $d->setYear(($d->getYear())-1);
        } elseif($d->getDay() == 1 && $d->getMonth() != 1){
            echo '2';
            $prevMonth = new TDate(10,$d->getMonth()-1 , $d->getYear());
            $days = DaysInMonth($prevMonth);
            $d->setMonth(($d->getMonth())-1);
            $d->setDay($days['days']);

        } else {
            echo'3';
            $d->setDay($d->getDay()-1);
        }
    }

    return $d;
}

$a = new TDate( 01,01,2014);
var_dump(PrevDate1($a));

$b = new TDate( 11,01,2014);
var_dump(PrevDate1($b));

$c = new TDate( 01,11,2014);
var_dump(PrevDate1($c));