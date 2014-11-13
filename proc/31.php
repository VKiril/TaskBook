<?php
/**
 * Write a logical function IsPalindrome(K) that returns True, if the
 * decimal representation of a positive parameter K is a palindrome
 * (i. e., it is read equally both from left to right and from right to left),
 * and False otherwise. Using this function, find the amount of palindromes in
 * a given sequence of 10 positive integers.
 */

function IsPalindrome($K){
    $str =intval($K);
    $arr2 = '';
    $arr1 = str_split($str);
    // print_r($arr1);
    //echo '<br/>'.$len ;
    foreach($arr1 as $elements){
        $arr2 = $elements.$arr2;
    }
    $arr2 = str_split($arr2);
    //print_r()
    //print_r($arr2);
    if($arr2 == $arr1){
        $result = 'true';
    }else{
        $result = 'false';
    }
    return $result ;
}
$var = 12321;
$response = IsPalindrome($var);
echo 'is '.$var. ' a palindrome ? '.$response.'<br/>' ;

$var1 = 1234321;
$response = IsPalindrome($var1);
echo 'is '.$var1. ' a palindrome ? '.$response.'<br/>' ;

$var2 = 123211;
$response = IsPalindrome($var2);
echo 'is '.$var2. ' a palindrome ? '.$response.'<br/>' ;