<?php
/**
 * Write an integer function Sign(X) that returns the following value:
 *   −1,    if X < 0;        0,    if X = 0;        1,    if X > 0
 */
function Sign($X){
    if($X < 0){
        return (-1);
    }elseif($X == 0){
        return 0;
    }else{
        return 1;
    }
}
$var = Sign(10);
echo 'the result is :'.$var;