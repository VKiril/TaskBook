<?php
/**
 * Write a real-valued function Calc(A, B, Op) that performs an arithmetic
 * operation over nonzero real numbers A and B and returns the result value.
 * An arithmetic operation is determined by integer parameter Op as follows:
 * 1 — subtraction, 2 — multiplication, 3 — division, and addition otherwise.
 * Having input real numbers A, B and integers N1, N2, N3 and using this function,
 * perform over given A, B three operations determined by given N1, N2, N3. Output
 * the result value of each operation.
 */

function Calc($A, $B, $Op){
    switch($Op){
        case '-':{$result = $A-$B;} break;
        case '+':{$result = $A+$B;} break;
        case '*':{$result = $A*$B;} break;
        case '/':{$result = $A/$B;} break;
        default:{
            $result = 'wrong operator ';
        }
    }
    return $result;
}


echo 'calc '.(Calc(2 ,3 ,'*'))  .'<br/>';
echo 'calc '.(Calc(3 ,7 ,'+'))  .'<br/>';
echo 'calc '.(Calc(31 ,35 ,'-')).'<br/>';
echo 'calc '.(Calc(23 ,13 ,'/')).'<br/>';
echo 'calc '.(Calc(23 ,13 ,'&')).'<br/>';
