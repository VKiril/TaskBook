<?php
/**
 * Write a function TimeToHMS(T) that converts a time interval T
 * (in seconds) into the "hours H, minutes M, seconds S" format and
 * returns the values H, M, S (T, H, M, S are integers). Using this
 * function, find the amount of hours, minutes and seconds for each of
 * five given time intervals T1, T2, …, T5.
 */
include 'phpHelper.php';
?>
<script>
    function TimeToHMS(T){
        var minutes = 0 ;
        var hours = 0 ;
        if(T >= 60){
            minutes = T/60;
            minutes = parseInt(minutes);
            T = T - minutes*60;
        }
        if(minutes >= 60){
            hours = minutes/60;
            minutes = parseInt(minutes );
            minutes =  minutes - hours*60;
        }
        var result = new Array(T,minutes , hours);
        return result;
    }
    var t1 = 3600 ;
    var t2 = 7200 ;
    var t3 = 542313 ;
    var t4 = 120 ;

    var T1 = TimeToHMS(t1);
    var T2 = TimeToHMS(t2);
    var T3 = TimeToHMS(t3);
    var T4 = TimeToHMS(t4);

     document.getElementById('body').innerHTML = 'seconds are ' + t1 + ' here are ' + T1[0] + 'sec ' + T1[1] + 'min ' + T1[2] + 'hours ';
    document.getElementById('body1').innerHTML = 'seconds are ' + t2 + ' here are ' + T2[0] + 'sec ' + T2[1] + 'min ' + T2[2] + 'hours ';
    document.getElementById('body2').innerHTML = 'seconds are ' + t3 + ' here are ' + T3[0] + 'sec ' + T3[1] + 'min ' + T3[2] + 'hours ';
    document.getElementById('body3').innerHTML = 'seconds are ' + t4 + ' here are ' + T4[0] + 'sec ' + T4[1] + 'min ' + T4[2] + 'hours ';
</script>