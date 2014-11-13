<?php
/**
 * Write a logical function Even(K) that returns True, if an integer parameter K
 * is an even number, and False otherwise. Using this function, find the amount of
 * even numbers in a given sequence of 10 integers.
 */

function Even($K){
    if($K %2 == 0){

        return 'true';
    }else{

        return 'false';
    }
}

echo 'the given number (10) is even or no : '.(Even(10)).'<br/>';
echo 'the given number (11) is even or no : '.(Even(11)).'<br/>';