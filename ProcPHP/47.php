<head>
    <title>47</title>
</head>
<?php
/**
 * Using the GCD2 function from the task Proc46, write a procedure Frac1(a, b, p, q),
 * that simplifies a fraction a/b to the irreducible form p/q (a and b are input integer
 * parameters, p and q are output integer parameters). The sign of a resulting fraction
 * p/q is assigned to its numerator, so q > 0. Using this procedure, find the numerator
 * and the denominator for each of irreducible fractions a/b + c/d, a/b + e/f, a/b + g/h
 * provided that integers a, b, c, d, e, f, g, h are given.
 */

echo("<div style='display: none;'>");
include '46.php';
echo('</div>');

function Frac1($a, $b, &$p = 1 , &$q = 1 ){
    $gcd = GCD2($a , $b);
    if($gcd['divisor'] != 'null'){
        $p = $a/$gcd['divisor'];
        $q = $b/$gcd['divisor'];
    } else {
        $p = $a;
        $q = $b;
    }
}
Frac1( 20 , 10 , $a , $b);
echo($a .' / '. $b.'<br/>');

Frac1( 3 , 9 , $a , $b);
echo($a .' / '. $b.'<br/>');

Frac1( 17 , 10 , $a , $b);
echo($a .' / '. $b.'<br/>');



