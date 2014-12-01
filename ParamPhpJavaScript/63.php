<?php
/**
 * Using the TDate type and the DaysInMonth and CheckDate functions (see Param59−Param61), write a
 * procedure NextDate(D) that changes a correct date D (of TDate type) to the next one; if D contains an
 * invalid date then it remains unchanged. The parameter D is an input and output parameter. Apply this procedure
 * to five given dates.
 */
include 'helper.php';
echo '<div style="display: none;">';
require_once '59.php';
include '61.php';
echo '</div >';
use ParamPhpJavaScrit\TDate\TDate;

function NextDate1(&$d){
    $nrOfDays = DaysInMonth($d);
    if ($d->getDay() == 31 && $d->getMonth() == 12){
        $d->setDay(1);
        $d->setMonth(1);
        $d->setYear($d->getYear()+1);
    } elseif ($d->getDay() == $nrOfDays['days']){
        $d->setDay(1);
        $d->setMonth($nrOfDays['month']+1);
    } else {
        $d->setDay($d->getDay()+1);
    }
}


$a = new TDate( 31,12,2014);
NextDate1($a);
var_dump($a);

$b = new TDate( 31,01,2014);
NextDate1($b);
var_dump($b);

$c = new TDate( 01,11,2014);
NextDate1($c);
var_dump($c);