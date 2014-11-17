
<head>
    <title>52</title>
</head><?php
/**
 * Write a logical function IsLeapYear(Y) that returns True if a year
 * Y (a positive integer parameter) is a leap year, and False otherwise.
 * Output the return values of this function for five given values of the parameter Y.
 * Note that a year is a leap year if it is divisible by 4 except for years that are
 * divisible by 100 and are not divisible by 400.
 */

function IsLeapYear($Y){
    $var = false ;
    $iterator = 0 ;
   for($i = 0 ; $i < 3000 ; $i += 4){
        if($Y == $i){
            return 'true' ;
        }
    }
    return 'false';

}

echo('is year 2014  a leap year ? '.(IsLeapYear(2014)).'<br/>');
echo('is year 2015  a leap year ? '.(IsLeapYear(2015)).'<br/>');
echo('is year 2016  a leap year ? '.(IsLeapYear(2016)).'<br/>');

?>

<span style="display: inline-block">
    definition of leap year : &nbsp;
<a href="http://shpargalkablog.ru/2013/10/leap-year.html">
    <h1 style='color: blue ; opacity: 0.6 ; font-style: oblique ; font-family: "Arial Black", arial-black'> leap year</h1>
</a>
</span>
