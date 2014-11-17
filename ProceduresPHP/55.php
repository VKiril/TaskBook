<?php
/**
 * Using the MonthDays function from the task Func53, write a function NextDate(D, M, Y)
 * that changes a correct date, represented at the "day D, month number M, year Y" format,
 * to a next one and returns new values of day, month, and year (all numbers are integers).
 * Apply this function to three given dates and output resulting next ones.
 */

echo('<div style="display: none">');
include '53.php';
echo('</div>');

function NextDate($D, $M, $Y){
    $dateVerification = MonthDays($M, $Y);
    if($D > $dateVerification){
        echo('incorrect date , no such day');
        return 'wrong date' ;
    }
   // echo($dateVerification.'<br/>');
    $response = array();
    if ($dateVerification == $D && $M == 12){
        $prevYear  = $Y + 1 ;
        $prevMonth = 1 ;
        $prevDate  = 1;
        $response  = array(
            'day'       => $prevDate  ,
            'month'     => $prevMonth ,
            'year'      => $prevYear,
        );
    } elseif($dateVerification == $D){
        $nextYear  = $Y ;
        $nextMonth = $M + 1 ;
        $nextDate  = 1 ;
        $response  = array(
            'day'       => $nextDate  ,
            'month'     => $nextMonth ,
            'year'      => $nextYear,
        );
    } else {
        $D ++ ;
        $response  = array(
            'day'       => $D  ,
            'month'     => $M ,
            'year'      => $Y,
        );
    }

    return $response ;
}

$var = NextDate(33, 12, 2014);
if($var =="wrong date"){
    echo $var .'<br/>';
}else{
    echo('next date of 33.12.2014 is '.$var['day'].'.'.$var['month'].'.'.$var['year'].'<br/>');
}
$var1 = NextDate(30, 11, 2013);
if($var1 =="wrong date"){
    echo $var1 .'<br/>';
} else{
    echo('next date of 31.11.2013 is '.$var1['day'].'.'.$var1['month'].'.'.$var1['year'].'<br/>');
}
$var2 = NextDate(13, 1, 2014);
if($var2 =="wrong date"){
    echo $var2 .'<br/>';
} else{
    echo('next date of 13.1.2014 is '.$var2['day'].'.'.$var2['month'].'.'.$var2['year'].'<br/>');
}
$var3 = NextDate(13, 10, 2014);
if($var3 =="wrong date"){
    echo $var3 .'<br/>';
} else {
    echo('next date of 13.10.2014 is '.$var3['day'].'.'.$var3['month'].'.'.$var3['year'].'<br/>');
}



