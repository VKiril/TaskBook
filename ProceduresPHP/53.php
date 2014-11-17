
<head>
    <title>53</title>
</head>
<?php
/**
 * Using the IsLeapYear function from the task Proc52,
 * write an integer function MonthDays(M, Y) that returns
 * the amount of days for M-th month of year Y (M and Y are
 * integers, 1 ≤ M ≤ 12, Y > 0). Output the return value of
 * this function for a given year Y and each of given
 * months M1, M2, M3.
 */

echo('<div style="display: none">');
include '52.php';
echo('</div>');
function arrayInit($nrOfDays){
    $numberOfDaysInYearMonth = array(
        'january'         => 31 ,
        'february'        => $nrOfDays,
        'march'           => 31 ,
        'april'           => 30 ,
        'may'             => 31 ,
        'june'            => 30 ,
        'july'            => 31 ,
        'august'          => 31 ,
        'september'       => 30 ,
        'october'         => 31 ,
        'november'        => 30 ,
        'december'        => 31

    );

    return $numberOfDaysInYearMonth ;
}

 function MonthDays($M, $Y){
     $response = array();
     if($Y >= 0 && $Y < 3000 && $M > 0 && $M <= 12){
         //echo('true <br/>');
         $var = IsLeapYear($Y);
         $numberOfFebruaryDays = 28 ;
         if($var == 'true'){
             $numberOfFebruaryDays = 29 ;
         }
         $array = arrayInit($numberOfFebruaryDays);
         $iterator = 0 ;
         foreach ($array as $dayNr){
             $iterator ++ ;
             if($iterator == $M){
                 $response = $dayNr ;
             }
         }
     }

     return $response ;
}

print_r(MonthDays(11 ,2014 ));echo('<br/>');
print_r(MonthDays(2  ,2016 ));echo('<br/>');
print_r(MonthDays(2  ,2014 ));echo('<br/>');
print_r(MonthDays(10 ,2014 ));echo('<br/>');