<?php
/**
 * Write a procedure Minmax(X, Y) that exchanges, if necessary,
 * the values of two variables X and Y so that X ≤ Y (X and Y are
 * input and output real-valued parameters). Using four calls of this
 * procedure, find the minimal value and the maximal value among
 * given real numbers A, B, C, D.
 */

function Minmax(&$X, &$Y){
    if($X <= $Y){
        $var = $X;
        $X = $Y;
        $Y = $var;
        echo 'y is greater than x and we need to exchange it<br/>';
    }else{
        echo"y is smaller than x and we don't need to exchange it<br/>";
    }

}
$A=100;
$B=200;
$C=300;
$D=50;

echo "before exchange A is : &nbsp;".$A.' and B is : &nbsp; '.$B;
echo ' and C is : &nbsp; '.$C.' and D is : &nbsp; '.$D.'<br/>';
echo '<br/>';
Minmax($A,$B);
echo 'after exchange A is : &nbsp;'.$A.' and B is : &nbsp;'.$B.'<br/>';
Minmax($B,$C);
echo 'after exchange A is : &nbsp;'.$B.' and B is : &nbsp;'.$C.'<br/>';
Minmax($C,$D);
echo 'after exchange A is : &nbsp;'.$C.' and B is : &nbsp;'.$D.'<br/>';
