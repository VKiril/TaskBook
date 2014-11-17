<head>
    <title>49</title>
</head>
<?php
/**
 * Taking into account the formula GCD(A, B, C) = GCD(GCD(A, B), C)
 * and using the GCD2 function from the task Proc46, write an integer
 * function GCD3(A, B, C) that returns the greatest common divisor of three
 * positive integers A, B, C. Using this function, find the greatest common
 * divisor for each of triples (A, B, C), (A, C, D), (B, C, D) provided that
 * integers A, B, C, D are given.
 */

echo('<div style="display: none;">');
include'46.php';
echo('</div> <br/>');

function GCD3($A, $B, $C){
    $great1 = GCD2($A , $B);
    //var_dump($great1);
    $var  = $great1['divisor'] ;
    $great2 = GCD2($C , $var);

    return $great2;
}


$A =  10 ;
$B =  20 ;
$C =   5 ;
$D = 100 ;

print_r(GCD3($A,$B,$C));
echo('<br/>');
print_r(GCD3($A,$B,$D));