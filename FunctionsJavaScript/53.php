<?php
/**
 * Using the IsLeapYear function from the task Func52, write an integer
 * function MonthDays(M, Y) that returns the amount of days for M-th month
 * of year Y (M and Y are integers, 1 ≤ M ≤ 12, Y > 0). Output the return
 * value of this function for a given year Y and each of given
 * months M1, M2, M3.
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

    function arrayInit(nrOfDays){
        var numberOfDaysInYearMonth = [31, nrOfDays, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31 ];
        console.log(numberOfDaysInYearMonth);

        return numberOfDaysInYearMonth ;
    }

    function MonthDays(M, Y){
        var response = new Array();
        if(Y >= 0 && Y < 3000 && M > 0 && M <= 12){
            var leapYear = IsLeapYear(Y);
            console.log(leapYear);
            var numberOfFebruaryDays = 28 ;
            if(leapYear == 'true'){
                numberOfFebruaryDays = 29 ;
            }
            var array = arrayInit(numberOfFebruaryDays);
            console.log('array'+array);
            console.log(M);
            response = array[M] ;
        }

        return response ;
    }
    var y1 = 2014 ; var m1 = 1 ;
    var y2 = 2015 ; var m2 = 2 ;
    var y3 = 2017 ; var m3 = 4 ;
    var y4 = 2011 ; var m4 = 5 ;

    var d1 = MonthDays(m1,y1 );
    var d2 = MonthDays(m2,y2 );
    var d3 = MonthDays(m3,y3 );
    var d4 = MonthDays(m4,y4 );

     document.getElementById('body').innerHTML = ' month ' + m1 + ' of year ' + y1 + ' have : ' + d1 + ' days';
    document.getElementById('body1').innerHTML = ' month ' + m2 + ' of year ' + y2 + ' have : ' + d2 + ' days';
    document.getElementById('body2').innerHTML = ' month ' + m3 + ' of year ' + y3 + ' have : ' + d3 + ' days';
    document.getElementById('body3').innerHTML = ' month ' + m4 + ' of year ' + y4 + ' have : ' + d4 + ' days';
</script>