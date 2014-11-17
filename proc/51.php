
<head>
    <title>51</title>
</head>

<?php
/**
 * Write a procedure IncTime(H, M, S, T) that increases a time
 * interval in hours H, minutes M, seconds S on T seconds
 * (H, M, S are input and output positive integer parameters,
 * T is an input positive integer parameter). Having input hours
 * H, minutes M, seconds S (as integers) and an integer T and using
 * the IncTime procedure, increase the given time interval on T seconds
 * and output new values of H, M, S.
 */

function IncTime($H, $M, $S, &$T){

    $T =  ($H * 60 * 60 + $M * 60 + $S);
}

IncTime(2,30 , 10 ,$time);
echo($time . ' seconds<br/>');

IncTime(1,30 , 10 ,$time);
echo($time . ' seconds<br/>');

IncTime(5,30 , 10 ,$time);
echo($time . ' seconds<br/>');