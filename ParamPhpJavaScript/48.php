<?php
/**
 * Write an integer function IntFileSize(S) that returns the amount of components in a binary file of integers
 * called S. If the required file does not exist then the function returns −1. Using this function, output the
 * amount of components for three binary files of integers with given names.
 */


include 'helper.php';

function IntFileSize($S){
    $file = fopen( $S, 'r');
    $var = fread($file,filesize($S));
    $arr = explode(' ', $var);
    echo('<br/>'.sizeof($arr));
    fclose($file);
}


IntFileSize('test.txt');



