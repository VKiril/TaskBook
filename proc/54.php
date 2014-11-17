<?php
/**
 * Using the MonthDays function from the task Proc53, write a procedure PrevDate(D, M, Y)
 * that changes a correct date, represented at the "day D, month number M, year Y" format,
 * to a previous one (D, M, Y are input and output integer parameters). Apply this procedure
 * to three given dates and output resulting previous ones.
 */

echo('<div style="display: none">');
include '53.php';
echo('</div>');

function PrevDate($D, $M, $Y){
    if($D == 1 && $M ==1){
        $prevYear  = $Y - 1 ;
        $prevMonth = 12 ;
        $prevDate  = MonthDays($prevMonth, $Y);
        $response  = array(
            'day'       => $prevDate  ,
            'month'     => $prevMonth ,
            'year'      => $prevYear,
        );
    } elseif ($D == 1){
        $prevYear  = $Y ;
        $prevMonth = $M - 1  ;
        $prevDate  = MonthDays($prevMonth, $Y);
        $response  = array(
            'day'       => $prevDate  ,
            'month'     => $prevMonth ,
            'year'      => $prevYear,
        );
    } else {
        $prevYear  = $Y ;
        $prevMonth = $M ;
        $prevDate  = $D - 1 ;
        $response  = array(
            'day'       => $prevDate  ,
            'month'     => $prevMonth ,
            'year'      => $prevYear,
        );
    }

    return $response ;
}
$var = PrevDate(1, 1, 2014);
$var1 = PrevDate(1, 11, 2013);
$var2 = PrevDate(13, 1, 2014);
$var3 = PrevDate(13, 10, 2014);

echo('prev date of 1.1.2014 is '.$var['day'].'.'.$var['month'].'.'.$var['year'].'<br/>');
echo('prev date of 1.11.2013 is '.$var1['day'].'.'.$var1['month'].'.'.$var1['year'].'<br/>');
echo('prev date of 13.1.2014 is '.$var2['day'].'.'.$var2['month'].'.'.$var2['year'].'<br/>');
echo('prev date of 13.10.2014 is '.$var3['day'].'.'.$var3['month'].'.'.$var3['year'].'<br/>');