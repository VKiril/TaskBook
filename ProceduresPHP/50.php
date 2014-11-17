
<head>
    <title>50</title>
</head>
<?php
/**
 * Write a procedure TimeToHMS(T, H, M, S) that converts a time interval T
 * (in seconds) into the "hours H, minutes M, seconds S" format
 * (T is an input integer parameter, H, M, S are output integer parameters).
 * Using this procedure, find the amount of hours, minutes and seconds for each
 * of five given time intervals T1, T2, …, T5.
 */

function TimeToHMS($T/*, &$H, &$M, &$S*/){
    $result = array(
        'seconds' => 0 ,
        'minutes' => 0 ,
        'hours'   => 0
    );
    if ($T >= 60){
        $result['minutes'] = intval($T / 60) ;
        $result['seconds'] = $T - ($result['minutes'] * 60);
        if($result['minutes'] >=  60){
            $result['hours'] = intval($result['minutes'] / 60);
            $result['minutes'] = $result['minutes']- ($result['hours'] * 60);
        }
    }
    return $result;
}

print_r(TimeToHMS(3700));echo('<br/>');
print_r(TimeToHMS(3600));echo('<br/>');
print_r(TimeToHMS(3699));echo('<br/>');
print_r(TimeToHMS(123));echo('<br/>');

