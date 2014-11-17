<?php
/**
 * Write an integer function DigitCount(K) that returns the amount of
 * digits in the decimal representation of a positive integer K. Using
 * this function, find the amount of digits for each of five given positive
 * integers.
 */

function DigitCount($K){
    return strlen($K);

}
echo '<br/> amount of digits in number 123545654 is : '.(DigitCount(123545654));
echo '<br/> amount of digits in number 12354456765654 is : '.(DigitCount(12354456765654));
echo '<br/> amount of digits in number 12334677654545654 is : '.(DigitCount(12334677654545654));
echo '<br/> amount of digits in number 125654 is : '.(DigitCount(125654));