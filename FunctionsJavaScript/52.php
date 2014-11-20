<?php
/**
 * Write a logical function IsLeapYear(Y) that returns True if a year
 * Y (a positive integer parameter) is a leap year, and False otherwise.
 * Output the return values of this function for five given values of
 * the parameter Y. Note that a year is a leap year if it is divisible
 * by 4 except for years that are divisible by 100 and are not divisible by 400.
 */
include 'phpHelper.php';
?>
<script>
    function IsLeapYear(Y){
        for(var i = 0 ; i < 3000 ; i += 4){
            if(Y == i){
                return 'true' ;
            }
        }
        return 'false';

    }


    document.getElementById('body').innerHTML = 'year 2014 is leap year ? ' + IsLeapYear(2014);
    document.getElementById('body2').innerHTML = 'year 2015 is leap year ? ' + IsLeapYear(2015);
    document.getElementById('body3').innerHTML = 'year 2016 is leap year ? ' + IsLeapYear(2016);
</script>