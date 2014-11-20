<?php
/**
 * Using the MonthDays function from the task Func53, write a
 * function PrevDate(D, M, Y) that changes a correct date, represented at the
 * "day D, month number M, year Y" format, to a previous one and returns new
 * values of day, month, and year (all numbers are integers). Apply this function
 * to three given dates and output resulting previous ones.
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


    function PrevDate(D, M,Y){
        var prevYear  = 0;
        var prevMonth = 0;
        var prevDate  = 0;
        var response  = 0;
        if(D == 1 && M ==1){
             prevYear  = Y - 1 ;
             prevMonth = 12 ;
             prevDate  = 31// MonthDays(prevMonth, Y);
             response  = [prevDate  ,prevMonth ,prevYear];
        } else if (D == 1){
            prevYear  = Y ;
            prevMonth = M - 1  ;
            prevDate  = MonthDays(prevMonth, Y);
            response  = [prevDate  , prevMonth , prevYear];
        } else {
            prevYear  = Y ;
            prevMonth = M ;
            prevDate  = D - 1 ;
            response  = [prevDate  ,prevMonth ,prevYear];
        }

        return response ;
    }


    var y1 = 2014 ; var m1 = 2 ; var day1 = 23;
    var y2 = 2015 ; var m2 = 1 ; var day2 = 1;
    var y3 = 2017 ; var m3 = 4 ; var day3 = 30;
    var y4 = 2011 ; var m4 = 5 ; var day4 = 2 ;

    var d1 = PrevDate(day1, m1,y1 );
    var d2 = PrevDate(day2, m2,y2 );
    var d3 = PrevDate(day3, m3,y3 );
    var d4 = PrevDate(day4, m4,y4 );

     document.getElementById('body').innerHTML = 'day ' + day1 + 'month ' + m1 + '  year ' + y1 + ' prev date is  : ' + d1[0] + '.'+ d1[1] + '.'+ d1[2] ;
    document.getElementById('body1').innerHTML = 'day ' + day2 + 'month ' + m2 + '  year ' + y2 + ' prev date is  : ' + d2[0] + '.'+ d2[1] + '.'+ d2[2] ;
    document.getElementById('body2').innerHTML = 'day ' + day3 + 'month ' + m3 + '  year ' + y3 + ' prev date is  : ' + d3[0] + '.'+ d3[1] + '.'+ d3[2] ;
    document.getElementById('body3').innerHTML = 'day ' + day4 + 'month ' + m4 + '  year ' + y4 + ' prev date is  : ' + d4[0] + '.'+ d4[1] + '.'+ d4[2] ;
</script>
</script>