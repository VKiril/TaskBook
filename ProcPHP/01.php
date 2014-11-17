<?php
/*
 * Write a procedure PowerA3(A, B) that computes the third degree of
 *  a real number A and assigns the result to a real variable B
 * (A is an input parameter, B is an output parameter). Using this procedure,
 * find the third degree of five given real numbers.
 * */

function PowerA3($A , &$B=0){
    $B = $A*$A*$A;
}
PowerA3(5 , $x);
echo $x."<br/>";
PowerA3(3 , $x);
echo $x."<br/>";
