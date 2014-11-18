<?php
include 'phpHelper.php';
/*
 * Write a logical function IsPalindrome(K) that returns True,
 * if the decimal representation of a positive parameter K is a
 * palindrome (i. e., it is read equally both from left to right
 *  and from right to left), and False otherwise. Using this function,
 * find the amount of palindromes in a given sequence of 10
 * positive integers.*/
?>

<script>
    function IsPalindrome(K){
        var x = K.toString().length;
        //console.log(x);
        //console.log('K '+K);
        //var sum = x + K ;
        //console.log('sum is '+sum);
        //var a = K.toString().charAt(5);
        //console.log('a is '+a);
        var inverse = '';
        for (var i = x ; i >=0 ; i--){
            inverse = inverse + K.toString().charAt(i);
        }
        console.log(inverse);
        if (K != inverse){
            return 'this number , ' + K +' is not a palindrome ';
        } else {
            return 'this number , ' + K +' is a palindrome ';
        }


    }
    document.getElementById('body').innerHTML  = IsPalindrome(12340984);
    document.getElementById('body1').innerHTML  = IsPalindrome(123454321);
    document.getElementById('body2').innerHTML  = IsPalindrome(78987);
</script>